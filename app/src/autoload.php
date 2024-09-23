<?php
spl_autoload_register(function ($class_name) {
    $directories = [];

    $file = __DIR__ . '/' . $class_name . '.php';
    if (file_exists($file)) {
        include $file;
    } else {
        foreach ($directories as $dir) {
            $file = __DIR__ . '/' . $dir . '/' . $class_name . '.php';
            if (file_exists($file)) {
                include $file;
                break;
            }
        }
    }
});

function autoload_view($view_name, $user = null)
{
    $file = $_SERVER['DOCUMENT_ROOT'] . '/sip.orbixtartechnologies.com/public/' . $view_name . '.php';

    if (file_exists($file)) {
        require_once $file;
    } else {
        echo $file;
        exit();
        // Handle the error, e.g., show a 404 page or throw an exception
        echo "View not found: " . $view_name;
    }
}
