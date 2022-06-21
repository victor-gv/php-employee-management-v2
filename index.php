<?php 

require_once('./src/libs/database.php');

$database = new database();

$test = $database->getConnection()->prepare("SELECT * FROM employees");

try {
    $test->execute();
    $employees = $test->fetchAll();
    print_r($employees);
} catch (PDOException $e) {
    return [];
}
