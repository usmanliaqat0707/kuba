<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$referrerPage = explode("/", $_SERVER['HTTP_REFERER']);
if ($referrerPage[count($referrerPage) - 1] == "account-setup") {
    require_once __DIR__ . '/../autoload.php';

    session_start();
    $user = unserialize($_SESSION['user']);

    $update = $user->updateUser($_POST, $user->email);

    if($update->error == true){
        http_response_code(200);
        echo json_encode(array(
            'error' => true,
            'message' => $update->message
        ));
        exit();
    }else{
        header("HTTP/1.1 200 OK");
        exit();
    }
}else{
    header("HTTP/1.1 403 Unauthorized Request");
    exit();
}
