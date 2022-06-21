<?php

class LoginController extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->loadModel("login");
    }

    function index()
    {
        $this->view->render("login/index");
    }

    public function logoutUser()
    {
        $this->model->logout();
        header('Location: ' . BASE_URL . 'login/index');
    }

    public function loginUser()
    {
        $result = $this->model->login($_POST['email'], $_POST['password']);

        if (!$result) {
            header('Location: ' . BASE_URL . 'login/index');
            exit();
        }
        header('Location: ' . BASE_URL . 'employee/dashboard');
        exit();
    }
}