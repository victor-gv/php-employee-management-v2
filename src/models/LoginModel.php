<?php
//Validate Session


class LoginModel extends Model{
    function __construct(){
        parent::__construct();
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
    }

    //Function to check the login fields
    function login($email, $pass){
        //Call to query method in Model with the query
        $result = $this->query("SELECT * FROM users WHERE email=?;",[$email]);
        echo "<br>Result<br>";
        var_dump($result);
        if(count($result)>0){
            $user = $result[0];
            echo "<br>";
            var_dump($pass); echo " y ";var_dump($user["password"]);echo"yyyy";
            if(password_verify($pass, password_hash($user["password"], PASSWORD_DEFAULT))){
                $_SESSION["userId"] = $user["id"];
                $_SESSION["time"] = time();
                $_SESSION["lifeTime"] = 600;
                return true;
            }
        }
        return false;
    }

    function logOut(){
        session_destroy();
    }

    function checkLoginStatus(){
        var_dump("comprobando");
        if(isset($_SESSION["userId"])){
            if(time() - $_SESSION["time"] > $_SESSION["lifeTime"]){
                $this->logOut();
                return false;
            }else{
                return true;
            }
        }else{
            var_dump("mal");
            return false;
        }
    }
}