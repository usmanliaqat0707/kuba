<?php

echo json_encode(array(
    'error' => true,
    'message' => $_POST['referral_id']
));
exit();


if (isset($_POST['referral_id'])) {
    require_once __DIR__ . '/../autoload.php';
    $referral_id = $_POST['referral_id'];

    $database = database::getInstance();
    $user = new User($database);
    header("HTTP/1.1 200 OK");
    exit();
} else {
    header("HTTP/1.1 503 Invalid Login");
    exit();
}