<?php
    
    session_start();


    function login($email, $password) {
        if(
            (isset($_SESSION['email']) and $_SESSION['email'] === $email) and 
            (isset($_SESSION['password']) and $_SESSION['password'] === md5($password))
        )  {
            // login user
            $_SESSION['login'] = true;
            return $_SESSION['user'];
        } else {
            return null;
        }
    }

    function register($email, $password, $name) {
        // creation de la session
        $_SESSION['email'] = $email;
        $_SESSION['password'] = md5($password);
        $_SESSION['user'] = [
            "name" => $name,
            "email" => $email
        ];
        $_SESSION['login'] = true;

        return true;
    }

    function getUser(){
        if(isset($_SESSION['login'])) {
            return $_SESSION['user'];
        } else {
            return null;
        }
    }

    function logout(){
        unset($_SESSION['login']);

        return true;
    }

?>