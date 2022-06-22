<?php
require_once "./config/constants.php";
require_once LIBS . "classes/Controller.php";

class SessionController extends Controller{
    function __construct(){
        parent::__construct();
        $this->loadModel("login");
    }

    public function checkSession($controller, $method){
        var_dump("hola");
        if($this->model->checkLoginStatus()){
            if($controller == null || ($controller == "login" && $method != "logoutuser")){
                print_r("vamos al dashboard");
                // header("Location: " . BASE_PATH . "/employee/dashboard");
                exit();
            }
        }else if($controller !== "login"){
            print_r("vamos al login" . VIEWS);
            
            header("Location: " . BASE_URL . "login/index");
            // require_once VIEWS . "login/index.php";
            exit();
        }
    }
}
