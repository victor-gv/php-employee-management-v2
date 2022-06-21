<?php

class SessionController extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->loadModel("login");
    }

    function checkSession($controller, $method)
    {
        if (!Controller::isAjaxRequest()) {
            if ($this->model->checkLoginStatus()) {
                if ($controller == null  || ($controller == "login" && $method !== "logoutUser")) {
                    header("Location: " . BASE_URL . "employee/dashboard");
                    exit();
                }
            } else if ($controller !== "login") {
                header("Location: " . BASE_URL . "login/index");
                exit();
            }
        }
    }
}