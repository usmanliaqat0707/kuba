<?php

include('database.config.php');

class database extends mysqli
{
    private static $instance = null;
    private static $user = DBUSER;
    private static $pass = DBPASS;
    private static $dbName = DBNAME;
    private static $dbHost = DBHOST;

    public static function getInstance()
    {
        if (!self::$instance instanceof self) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    private function __construct()
    {
        parent::__construct($this::$dbHost, $this::$user, $this::$pass, $this::$dbName);
        if (mysqli_connect_error()) {
            exit('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
        }
    }

    public function __destruct()
    {
        if (self::$instance && !self::$instance->connect_error)
            self::$instance->close();
    }

    public function dbquery($query)
    {
        $response = new stdClass();
        try{
            if ($this->query($query)) {
                $response->error = false;
                $response->message = NULL;
            } else {
                $response->error = true;
                $response->message = $this->error;
            }
        }catch(mysqli_sql_exception $exception){
            $response->error = true;
            $response->message = $exception->getMessage();
        }

        return $response;
    }

    public function get_result($query)
    {
        try {
            $result = $this->query($query);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                return $row;
            } else return null;
        } catch (Exception $e) {
            $response = new stdClass();
            $response->error = true;
            $response->message = $this->error;

            return $response;
        }
    }

    public function isExist($table, $col, $val){
        $query = "SELECT COUNT(*) AS Total FROM $table WHERE $col = '$val'";
        $result = $this->query($query);
        if ($result->num_rows > 0){
            $row = $result->fetch_assoc();
            if($row['Total'] == 0)
                return null;
            else
                return true;
        }else{
            return null;
        }
    }
}
