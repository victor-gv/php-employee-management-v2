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
        var_dump($employee);
        echo "<br>";
        var_dump($_POST);
        return $this->query(
            "INSERT INTO employees (first_name, last_name, email, gender, city, streetAddress, state, age, postalCode, phoneNumber) VALUES (?,?,?,?,?,?,?,?,?,?),


        ");
    $query->bindParam(1, $employee["first_name"]);
    $query->bindParam(2, $employee["last_name"]);
    $query->bindParam(3, $employee["email"]);
    $query->bindParam(4, $employee["gender"]);
    $query->bindParam(5, $employee["city"]);
    $query->bindParam(6, $employee["streetAddress"]);
    $query->bindParam(7, $employee["state"]);
    $query->bindParam(8, $employee["age"]);
    $query->bindParam(9, $employee["postalCode"]);
    $query->bindParam(10, $employee["phoneNumber"]);
    }
}