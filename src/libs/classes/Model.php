<?php 

require_once LIBS . '/database.php';

class Model {
    protected $db;

    function __construct()
    {
        $this->db = new database();
    }

    function query($query, $params = [], $fetch=true){
        $conn = $this->db->getConnection();
        
        $req = $conn->prepare($query);
        $req->execute($params);

        if($fetch){
            return $req->fetchAll();
        }
        return $req;
    }
}


