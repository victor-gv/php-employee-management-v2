<?php
require_once "./config/constants.php";
require_once LIBS . "classes/Controller.php";

class LoginController extends Controller{
    function __construct(){
        parent::__construct();
        $this->loadModel("login");
    }

    function index(){
        $this->view->render("login/index");
    }

    public function logoutUser(){
        $this->model->logOut();
        header("Location: " . VIEWS . "login/index");
    }

    public function loginUser(){
        $result = $this->model->login($_POST["username"], $_POST["password"]);
        var_dump($_POST["password"]);
        if(!$result){
            header("Location: " . BASE_URL . "login/index.php");
            exit();
        }
        require_once BASE_PATH . "/employee/dashboard.php";
        exit();
    }
}
