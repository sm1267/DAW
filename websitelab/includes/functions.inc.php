<?php
    function invalidUser($username){
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    function userExists($conn, $username){
            $sql = "SELECT * FROM users WHERE user = ?;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ../auth.php?error=stmtfailed");
                exit();
            }

            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);

            $resultData = mysqli_stmt_get_result($stmt);

            if($row = mysqli_fetch_assoc($resultData)) {
                return $row;
            }
            else {
                $result = false;
                return $result;
            }

            mysqli_stmt_close($stmt);
    }

    function createUser($conn, $username, $password){
        $sql = "INSERT INTO users (user, password) VALUES (?, ?);";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../auth.php?error=stmtfailed");
            exit();
        }
        
        $hash = password_hash($password, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "ss", $username, $hash);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../auth.php?error=none");
        exit();
    }

    function loginUser($conn, $username, $password) {
        $userExists = userExists($conn, $username);
        $hashed = $userExists["password"];
        $checkPassword = password_verify($password, $hashed);

        if (!$checkPassword) {
           header("location: ../auth.php?error=wronglogin");
           exit(); 
        }
        else {
            session_start();
            $_SESSION["userid"] = $userExists["id"];
            $_SESSION["user"] = $userExists["user"];
            header("location: ../index.php");
            exit();
        }
        
    }
