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

    function addEmployee($employee){
        return $this->query("INSERT INTO employees (" . implode(', ', array_keys($employee)) . ") VALUES " .
            '(' . implode(', ', array_map(function ($key) {
                return ":$key";
            }, array_keys($employee))) . ')', $employee);
    }

    function deleteEmployee($id){
        return $this->query("DELETE FROM employees WHERE id = ?", [$id]);
    }

    function modifyEmployee($id){
        return $this->query("SELECT first_name, last_name, email, gender, city, streetAddress, state, age, postalCode, phoneNumber  FROM employees WHERE id = ?", [$id]);
    }
}