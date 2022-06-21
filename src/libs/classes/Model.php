<?php 

require_once('../../libs/database.php');

class Model {
    protected $db;

    function __construct()
    {
        $this->db = new database();
    }

    function query(){
        $query = $this->db->getConnection()->prepare("SELECT * FROM employees");
        
        try {
            $query->execute();
            $employees = $query->fetchAll();
            print_r($employees);
        } catch (PDOException $e) {
            return [];
        }
        
    }
}

// $testing = new Model;
// $testing->query();

