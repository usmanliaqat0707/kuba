<?php

if (isset($_POST['email']) && isset($_POST['password'])) {
    require_once __DIR__ . '/../autoload.php';

    $referrer_user_id = NULL;
    $referrer = $_SERVER['HTTP_REFERER'];
    $referrer_components = parse_url($referrer);
    if (isset($referrer_components['query'])) {
        parse_str($referrer_components['query'], $referrer_params);
        if (array_key_exists('referral', $referrer_params)) {
            $referrer_user_id = $referrer_params['referral'];
        }
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    $database = database::getInstance();
    $user = new User($database);

    $signup = $user->register($email, $password, $referrer_user_id);

    if ($signup->error) {
        http_response_code(200);
        echo json_encode(array(
            'error' => true,
            'message' => $signup->message
        ));
        exit();
    } else {
        session_start();
        $_SESSION['user'] = serialize($user);
        header("HTTP/1.1 200 OK");
        exit();
    }
} else {
    header("HTTP/1.1 503 Invalid Login");
    exit();
}
