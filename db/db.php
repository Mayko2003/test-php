<?php

namespace db;

use SQLite3;

class DB extends SQLite3
{
    public function __construct()
    {
        $this->open('test.db');
    }

    public function signin($username, $password)
    {

        // check if user exists 
        $user = $this->querySingle("SELECT * FROM users WHERE username = '$username'", true);

        if ($user) {
            
            if (password_verify($password, $user['password'])) {
                // login
                session_start();
                $_SESSION['user'] = $user;
                header('Location: ./');
            } else {
                header('Location: ./signin.php?error=2');
            }
        } else {
            header('Location: ./signin.php?error=1');
        }
    }

    public function signup($username, $password)
    {
        // check if user exists

        $result = $this->querySingle("SELECT * FROM users WHERE username = '$username'");

        if ($result) {
            Header('Location: ./signup.php?error=1');
        } else {
            // create user
            $password = password_hash($password, PASSWORD_DEFAULT);

            $result = $this->exec("INSERT INTO users (username, password) VALUES ('$username', '$password')");

            if ($result) {
                header('Location: ./signin.php');
            } else {
                header('Location: ./signup.php?error=2');
            }
        }
    }

    public function loggout()
    {
        session_start();
        session_destroy();
        header('Location: ./');
    }

    public function logged()
    {
        session_start();
        if (isset($_SESSION['user'])) {
            return true;
        } else {
            return false;
        }
    }
}


?>