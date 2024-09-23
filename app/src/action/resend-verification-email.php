<?php

    session_start();
    if(isset($_SESSION['user'])){
        $user = unserialize($_SESSION['user']);
        $email = $user->email;

        http_response_code(200);
        echo json_encode(array(
            'error' => true,
            'message' => $email
        ));
        exit();

    }else{
        header("HTTP/1.1 403 Unauthorized Request");
        exit();
    }