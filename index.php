<?php
    $uri = $_SERVER['REQUEST_URI'];
    switch ($uri) {
        case '':
        case '/':
            include_once 'controllers/home_controller.php';
            break;
        default:
            http_response_code(404);
            break;
    }
?>