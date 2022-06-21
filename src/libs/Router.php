<?php
class Router{
    public function __construct(){
        $url = isset($_GET["url"]) ? $_GET["url"] : null;
        $url = rtrim($url, "/");
        $url = explode("/", $url);

        $controller_file = CONTROLLERS . "/{$url[0]}Controller.php";
        $controller = ucfirst($url[0]) . 'Controller';

        //$errorController = new ErrorController();
        print_r($url);
        if(file_exists($controller_file)){
            require_once $controller_file;
            $controller = new $controller;
            if(isset($url[1])){
                if(method_exists($controller, $url[1])){
                    if(isset($url[2])){
                        $controller->{$url[1]}($url[2]);
                    }else{
                        $controller->{$url[1]}();
                    }
                }else{
                    //$errorController->showError("This action doesn't exists");
                }
            }
        }else{
            //$errorController->showError("This page doesn't exists");
        }
    }
}