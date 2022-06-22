<?php

class Controller{
    protected $view;
    protected $model;

    function __construct(){
        require_once LIBS . "classes/View.php";
        $this->view = new View();
    }

    function loadModel($name){
        //Imports model file
        require_once MODELS . "{$name}Model.php";
        //switch to camelCase
        $name = ucfirst(strtolower($name));
        //give to model the name of class Model
        $model = "{$name}Model";
        //create the model object
        $this->model = new $model;
        echo "<br>";
        var_dump(MODELS . "{$name}Model.php");
        echo "<br>";
    }

    protected function throw_error($code, $message)
    {
        die(json_encode(['message' => $message, 'code' => $code]));
    }

    public static function isAjaxRequest()
    {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
    }
}