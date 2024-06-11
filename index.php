<link rel="stylesheet" href="/assets/css/global.css">
<?php
    $uri = $_SERVER['REQUEST_URI'];
    switch ($uri) {
        case '':
        case '/':
            require_once 'controllers/home_controller.php';
            break;
        case '/registry':
            require_once 'controllers/registry_controller.php';
            break;
        default:
            require_once 'views/notfound_view.php';
            break;
    }
?>