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

    function showEmployee($id){
        return $this->query("SELECT id, first_name, last_name, email, gender, city, streetAddress, state, age, postalCode, phoneNumber  FROM employees WHERE id = ?", [$id]);
    }

    function modifyEmployee($employee){
        $str="UPDATE employees SET ";
        $keys = array_keys($employee);
        $values = array_values($employee);

        for($i=1;$i<10;$i++){
            if($i<=8){
                $str=$str . $keys[$i] . "='" . $values[$i] . "',";
            }else{
                $str=$str . $keys[$i] . "='" . $values[$i] . "' ";
            }
        }
        $str=$str . "WHERE id=" . $values[0];
        return $this->query($str);
    }
}