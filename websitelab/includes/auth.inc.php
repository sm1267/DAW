<?php
if (isset($_POST["submit"])) {
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        
        require_once 'db.inc.php';
        require_once 'functions.inc.php';

        if(empty($username)){
            echo"Introduceti un nume de utilizator";
        }
        elseif(empty($password)){
            echo"Introduceti parola";
        }
        elseif(invalidUser($username)){
            header("location: ../auth.php?error=invalidusername");
            exit();
        }
        elseif(userExists($conn, $username)){
            loginUser($conn, $username, $password);
        }
        else{
           createUser($conn, $username, $password);
        }
    }
}
else{
    header("location: ../auth.php");
    exit();
}