<?php
require_once '../app/config/config.php';
if (isset($_GET["controller"])) {
    $controller = $_GET["controller"];
    $controllerClass = ucfirst($controller) . "Controller";
    if (isset($_GET["action"])) {
        $action = $_GET["action"];

    } else {
        $action = 'index';
    }
    $controllerName = $controller . "Controller.php";
    $controllerFile = APP_ROOT . "/app/controllers/" . $controllerName;
    if (file_exists($controllerFile)) {
        require_once($controllerFile);
        if (class_exists($controllerClass)) {
            $controller = new $controllerClass();
            if (method_exists($controller, $action)) {
                $controller->$action();
            } else {
                $controller->index();
            }
        }
    }
} else {
    require APP_ROOT . '\app\controllers\HomeController.php';
    $HomeControler = new HomeController();
    $HomeControler->index();
}
