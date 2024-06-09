<?php
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    switch ($uri) {
        case '':
        case '/':
            include_once 'controllers/home_controller.php';
            break;
        default:
            include_once 'views/404_view.php';
            break;
    }
?>