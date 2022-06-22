<?php 

class EmployeeModel extends Model {
    function __construct()
    {
        parent::__construct();
    }

    function getEmployees(){
        return $this->query(
            "SELECT * FROM employees;");
    }
}