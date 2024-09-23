<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__.'/../vendor/autoload.php';

class Mail
{
    private $mail;
    private $message_content;
    private $response;

    public function __construct()
    {
        $this->mail = new PHPMailer(true);
        $this->mail->isSMTP();
        $this->mail->SMTPAuth = true;
        $this->mail->Host = "kubacryptonetwork.com";
        $this->mail->Port = 465;

        $this->mail->Username = "no-reply@kubacryptonetwork.com";
        $this->mail->Password = "Operations@1122";

        $this->mail->SMTPSecure = "ssl";
        $this->mail->SMTPAutoTLS = true;

        $this->mail->setFrom("james@tradewhileisleep.com", "Trade While I Sleep");
        $this->mail->isHTML(true);
        $this->mail->CharSet = 'UTF-8';
        $this->mail->addCustomHeader('List-Unsubscribe', '<https://kubacryptonetwork.com/Unsubscribe.html>');
    }

    public function sendAccountWelcomeEmail($recepient_email, $verification_link, $recepient_name = '')
    {
        $this->message_content = file_get_contents(__DIR__. '/../templates/email/welcome.html');
        $this->message_content = str_replace('{name}', $recepient_name, $this->message_content);
        $this->message_content = str_replace('{link}', $verification_link, $this->message_content);

        $this->mail->addAddress($recepient_email, $recepient_name);
        $this->mail->Subject = "Welcome to Kuba - Activate Your Account";
        $this->mail->Body = $this->message_content;

        $this->response = new stdClass();

        try {
            $this->mail->send();
            $this->response->error = false;
        } catch (Exception $e) {
            $this->response->error = true;
            $this->response->message = $this->mail->ErrorInfo;
        }

        return $this->response;
    }
}
