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
        header("Location: " . BASE_URL . "employee/dashboard");
    }

    function deleteEmployee($id){
        $this->model->deleteEmployee($id);
    }

    function showEmployee($id){
        $this->view->employee = $this->model->showEmployee($id)[0];
        self::employee();
    }
}