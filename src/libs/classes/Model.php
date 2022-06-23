<?php 

require_once LIBS . '/database.php';

class Model {
    protected $db;

    function __construct()
    {
        $this->db = new database();
    }

    function query($query, $params = [], $fetch=true){

        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->execute($params);
        if($fetch){
            return $stmt->fetchAll();
        }
        return $stmt;
    }
}



