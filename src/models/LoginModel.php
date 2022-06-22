<?php
class LoginModel extends Model
{
    function __construct()
    {
        parent::__construct();
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    function login($email, $password)
    {
        $results = $this->query(
            "SELECT * FROM users WHERE email = ?",
            [$email]
        );
        var_dump($results);

        if (count($results) > 0) {
            $user = $results[0];
            if (password_verify($password, password_hash($user["password"], PASSWORD_DEFAULT))) {
                $_SESSION['userId'] = $user['id'];
                $_SESSION['time'] = time();
                $_SESSION['lifeTime'] = 60 * 10;
                return true;
            }
        }
        return false;
    }

    function logout()
    {
        session_destroy();
        // unset($_SESSION['time']);
        // unset($_SESSION['lifeTime']);
        // unset($_SESSION['userId']);
    }

    function checkLoginStatus()
    {
        if (isset($_SESSION['userId'])) {
            if (time() - $_SESSION['time'] > $_SESSION['lifeTime']) {
                $this->logout();
                return false;
            } else {
                return true;
            }
        } else {
            return false;
        }
    }
}