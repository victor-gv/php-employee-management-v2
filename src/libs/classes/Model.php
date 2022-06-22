<?php 

require_once LIBS . '/database.php';

class Model {
    protected $db;

    function __construct()
    {
        $this->db = new database();
    }

    function query($query, $params = [], $fetch=true){
        print_r($query);
        echo "<br>";
        print_r($params);
        echo "<br>";

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


