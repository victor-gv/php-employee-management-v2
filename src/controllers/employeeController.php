<?php

class employeeController extends Controller {
    function __construct()
    {
        parent::__construct();
        $this->loadModel("employee");
    }

    function dashboard(){
        $this->view->render("employees/dashboard");
    }

    function getEmployees(){
        $res = $this->model->getEmployees();
        echo json_encode($res);
    }

    function employee(){
        $this->view->render("employees/employee");
    }

    function addEmployee(){
        $employee = $_POST;
        $this->model->addEmployee($employee);
        //self::dashboard();
        header("Location: " . BASE_URL . "employee/dashboard");
        $this->view->render("employees/dashboard");
    }

    function deleteEmployee($id){
        $this->model->deleteEmployee($id);
    }

    function modifyEmployee($id){
        $res = $this->model->modifyEmployee($id);
        var_dump($res);
        $this->view->render("employees/employee");
    }
}