<?php 

class EmployeeModel extends Model {
    function __construct()
    {
        parent::__construct();
    }

    function getEmployees(){
        $employees = $this->query(
            "SELECT * FROM employees");
        
        echo (json_encode($employees));
    }
}