<?php

if (isset($_POST['email']) && isset($_POST['password'])) {
    require_once __DIR__ . '/../autoload.php';
    $email = $_POST['email'];
    $password = $_POST['password'];

    $database = database::getInstance();
    $user = new User($database);

    if ($user->login($email, $password)) {
        session_start();
        $_SESSION['user'] = serialize($user);
        header("HTTP/1.1 200 OK");
        exit();
    } else {
        header("HTTP/1.1 503 Invalid Login");
        exit();
    }
} else {
    header("HTTP/1.1 503 Invalid Login");
    exit();
}
