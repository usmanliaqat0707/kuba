<?php
class User
{
    private $_database;
    public $data = array();
    public int $id;
    public string $email;
    public int $totalUsers = 0;
    public $referrer;

    public function __construct(database $database)
    {
        $this->_database = $database;

        if (session_status() == 0)
            session_start();

        if (isset($_SESSION['user'])) {
            $user = unserialize($_SESSION['user']);
            $this->email = $user->getEmail();
            $this->fetchUser($this->email);
        }
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
    }

    public function register($email, $password, $referrer_user_id = NULL)
    {
        $response = new stdClass();

        if ($referrer_user_id != NULL) {
            if ($this->_database->isExist("users", "user_id", $referrer_user_id)) {
                $this->referrer = $this->fetchUserData("user_id", $referrer_user_id);
            } else {
                $response->error = true;
                $response->message = "Invalid referral url";
            }
        }

        if (!property_exists($response, "error")) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $user_id = hash_hmac('sha256', $email, $password);
            $referral_code = $this->generateReferralCode($email);

            $query = "INSERT INTO users (user_id, email, password, referral_code, referrer_user_id) VALUES ('$user_id', '$email', '$hashed_password', '$referral_code', '$referrer_user_id')";
            $result = $this->_database->dbquery($query);
            if (!$result->error) {
                $this->id = $this->_database->insert_id;
                $this->email = $email;
                $this->user_id = $user_id;
                $this->is_verified = 'no';
                $this->email_verification_link = $this->createEmailVerificationLink($user_id);

                $mailer = new Mail();
                $mailer->sendAccountWelcomeEmail($email, $this->email_verification_link);

                $response->error = false;
                $response->user = $this;
            } else {
                $response->error = true;
                $response->message = $result->message;
            }
        }

        return $response;
    }

    public function login($email, $password)
    {
        // Prepare the SQL statement
        $result = $this->_database->get_result("SELECT * FROM users WHERE email = '$email'");

        if (!is_object($result)) {
            if ($result && password_verify($password, $result['password'])) {
                $this->id = $result['sr'];
                $this->email = $email;

                foreach ($result as $key => $value) {
                    if ($key != 'id' && $key != 'email')
                        $this->$key = $value;
                }

                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function updateUser($data, $email)
    {
        $query = "UPDATE users SET ";
        $updates = [];
        foreach ($data as $column => $value) {
            $updates[] = "$column = '" . mysqli_real_escape_string($this->_database->getInstance(), $value) . "'";
        }
        $query .= implode(", ", $updates);
        $query .= " WHERE email = '$email'";
        $result = $this->_database->getInstance()->dbquery($query);

        if ($result->error == false) {
            foreach ($data as $key => $value) {
                if ($key != 'id' && $key != 'email')
                    $this->$key = $value;
            }
        }

        return $result;
    }

    private function generateReferralCode($email)
    {
        $hash = sha1($email);
        $numericValue = base_convert(substr($hash, 0, 16), 16, 10);
        $base36Value = strtoupper(base_convert($numericValue, 10, 36));
        $uniqueCode = substr($base36Value, 0, 6);
        if ($this->_database->isExist("users", "referral_code", $uniqueCode)) {
            $uniqueCode = $this->generateUniqueCode();
        } else
            return $uniqueCode;
    }

    private function generateUniqueCode()
    {
        $unique = false;
        while (!$unique) {
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $uniqueCode = '';

            for ($i = 0; $i < 6; $i++) {
                $index = rand(0, strlen($characters) - 1);
                $uniqueCode .= $characters[$index];
            }

            if ($this->_database->isExist("users", "referral_code", $uniqueCode)) {
                $unique = false;
            } else {
                $unique = true;
            }
        }

        return $uniqueCode;
    }

    private function fetchUser($email)
    {
        $result = $this->_database->getInstance()->get_result("SELECT * FROM users WHERE email = '$email'");

        if ($result) {
            foreach ($result as $key => $value) {
                $this->$key = $value;
            }
        }

        if ($this->referrer_user_id != NULL) {
            $this->referrer = $this->fetchUserData("user_id", $this->referrer_user_id);
        }
    }

    public function fetchUserData($selector, $value)
    {
        $user = new stdClass();
        $result = $this->_database->getInstance()->get_result("SELECT * FROM users WHERE $selector = '$value'");
        if ($result) {
            foreach ($result as $key => $value) {
                $user->$key = $value;
            }
        }

        return $user;
    }

    private function fetchUserMeta($user_id)
    {
        $result = $this->_database->getInstance()->get_result("SELECT * FROM users_meta WHERE user_id = '$user_id'");

        if ($result) {
            foreach ($result as $key => $value) {
                if ($key != 'id' && $key != 'email')
                    $this->$key = $value;
            }
        }
    }

    public function createEmailVerificationLink($user_id)
    {
        $verification_token = bin2hex(random_bytes(32));
        $token_expiry = date('Y-m-d H:i:s', strtotime('+1 hour'));
        $query = "INSERT INTO email_verifications(user_id, token, expires_at) VALUES('$user_id', '$verification_token', '$token_expiry')";
        $this->_database->dbquery($query);
        $verification_link = "http://localhost/kuba/app/verify-email?token=" . $verification_token . "&user_id=" . $user_id;

        return $verification_link;
    }

    public function verifyEmail($token, $user_id)
    {
        $query = "SELECT expires_at FROM email_verifications WHERE token = '$token' and user_id = '$user_id'";
        $result = $this->_database->getInstance()->get_result($query);
        if (is_object($result)) return false;
        else {
            if (isset($result['expires_at'])) {
                $expiry = strtotime($result['expires_at']);
                $currentTimestamp = time();

                if ($expiry < $currentTimestamp) {
                    return false;
                } else {
                    $query = "UPDATE users SET is_email_verified = 'yes' WHERE user_id = '$user_id'";
                    $deleteQuery = "DELETE FROM email_verifications WHERE token = '$token' and user_id = '$user_id'";
                    if ($this->_database->getInstance()->dbquery($query)) {
                        $this->_database->getInstance()->dbquery($deleteQuery);
                        $this->is_verified = 'yes';
                        if (session_status() === PHP_SESSION_NONE) {
                            session_start();
                        }
                        $_SESSION['user'] = serialize($this);
                        return true;
                    } else return false;
                }
            } else return false;
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function isVerified()
    {
        return $this->is_verified;
    }

    public function isEmailVerified()
    {
        return $this->is_email_verified;
    }

    public function getExtension()
    {
        $key = 'extension';

        if (!property_exists($this, $key)) {
            $this->fetchUser($this->email);
        }
        return $this->$key;
    }

    public function isSetupComplete()
    {
        $key = "is_setup_complete";
        if (!property_exists($this, $key)) {
            if (!property_exists($this, $key))
                return 'no';
            else return $this->$key;
        } else return $this->$key;
    }

    public function getAccountSetupIndex()
    {
        $key = "account_setup";
        if (property_exists($this, $key))
            return $this->$key;
    }
}
