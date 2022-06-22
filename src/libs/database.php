<?php 

require_once ('./config/db.php');

class DataBase {
    public $connection = "mysql:host=" . HOST . ";"
    . "dbname=" . DB . ";"
    . "charset=" . CHARSET . ";";

    public $options = [
        PDO::ATTR_ERRMODE           =>  PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES  => FALSE,
    ];


    public function getConnection(){
        try {
            var_dump(new PDO ($this->connection, USER, PASSWORD, $this->options));
            return new PDO ($this->connection, USER, PASSWORD, $this->options);
        } catch (PDOException $e) {
            require_once(VIEWS . "/error/error.php");
        }
    } 
} 