<?php
require_once LIBS . "database.php";

class Model{
    private $db;

    function __construct(){
        $this->db = new DataBase();
    }

    function query($query, $params = [], $fetch=true){
        $conn = $this->db->getConnection();
        var_dump($params);
        $email = $params[0];
        $req = $conn->prepare($query);
        $req->bindParam(1, $email);
        $req->execute();
        if($fetch){
            return $req->fetchAll();
        }
        return $req;
    }
}