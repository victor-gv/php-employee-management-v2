<?php

// require_once "../../config/constants.php";
// require_once BASE_PATH ;

class Router{
    public function __construct(){
        $url = isset($_GET["url"]) ? $_GET["url"] : null;
        $url = rtrim($url, "/");
        $url = explode("/", $url);
        echo "<br>";
        print_r("Nueva URL: ");
        var_dump($url);
        echo "<br>";
        
        $controller_file = CONTROLLERS . "{$url[0]}Controller.php";
        $controller = ucfirst($url[0]) . 'Controller';

        //$errorController = new ErrorController();

        //After instanciate the controller we check if the user is logged in
        // require_once CONTROLLERS . "SessionController.php";
        $session = new SessionController();
        $session->checkSession(isset($url[0]) ? $url[0] : null, isset($url[1]) ? $url[1] : null);
        echo "<br>";
        
        if(file_exists($controller_file)){
            require_once $controller_file;
            $controller = new $controller;
            if(isset($url[1])){
                if(method_exists($controller, $url[1])){
                    if(isset($url[2])){
                        $controller->{$url[1]}($url[2]);
                    }else{
                        var_dump($url[1]);
                        $controller->{$url[1]}();
                    }
                }else{
                    //$errorController->showError("This action doesn't exists");
                }
            }
        }else{
            var_dump($controller);
            //$errorController->showError("This page doesn't exists");
        }
    }
}