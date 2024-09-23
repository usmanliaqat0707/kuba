<?php

require_once '../autoload.php';

$referer = $_SERVER['HTTP_REFERER'];

if (str_contains($referer, 'sip.orbixtartechnologies.com')) {
    session_start();
    if (isset($_SESSION['user'])) {
        $user = unserialize($_SESSION['user']);
        $response = get_object_vars($user);
        echo json_encode($response);
        exit();
    }
}
