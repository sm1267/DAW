<?php

class Login extends Dbh{

    protected function getUser($uid, $pwd){
        $stmt = $this->connect()->prepare('SELECT password FROM users WHERE user = ?;');
        
        if(!$stmt->execute(array($uid))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() == 0){
            $stmt = null;
            header("location: ../index.php?error=usernotfound");
            exit();
        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($pwd, $pwdHashed[0]["password"]);

        if($checkPwd == false){
            $stmt = null;
            header("location: ../index.php?error=wrongpassword");
            exit();
        }
        elseif($checkPwd  == true) {
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE user = ? AND password = ?;');

            if(!$stmt->execute(array($uid, $pwdHashed[0]['password']))) {
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }

            if($stmt->rowCount() == 0){
                $stmt = null;
                header("location: ../index.php?error=usernotfound");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["userid"] = $user[0]["id"];
            $_SESSION["useruid"] = $user[0]["user"];

            $stmt = null;
        }

        $stmt = null;

    }

}