<?php
    $uri = $_SERVER['REQUEST_URI'];
    switch ($uri) {
        case '':
        case '/':
            include_once 'controllers/home_controller.php';
            break;
        default:
            include_once 'views/notfound_view.php';
            break;
    }
?>