<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

spl_autoload_register(function ($class_name) {
    $paths = [
        'controllers/' . $class_name . '.php',
        'models/' . $class_name . '.php'
    ];
    foreach ($paths as $path) {
        if (file_exists($path)) {
            include $path;
            break;
        }
    }
});

$url = $_GET['page'] ?? 'home'; // Change to 'page' to match the JavaScript

$controller = new UserController();

switch ($url) {
    case 'home':
        $controller->serveHtml();
        break;
    case 'users':
        header('Content-Type: application/json'); // Make sure content-type is set
        $controller->serveJson();
        break;
    default:
        echo "404 Page Not Found";
        break;
}