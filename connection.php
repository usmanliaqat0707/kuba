<?php
require_once 'config.php';
$link = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($link->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}
