<?php

class Login extends Dbh {

protected function getUser($uid, $pwd) {
    try {
        $stmt = $this->connect()->prepare('SELECT id, user, password, role FROM users WHERE user = ?;');
        $stmt->execute([$uid]);

        if ($stmt->rowCount() === 0) {
            header("location: ../auth.php?error=usernotfound");
            exit();
        }

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!password_verify($pwd, $user['password'])) {
            header("location: ../auth.php?error=wrongpassword");
            exit();
        }

        session_start();
        $_SESSION["userid"] = $user["id"];
        $_SESSION["useruid"] = $user["user"];
        $_SESSION["role"] = $user["role"];

    } catch (PDOException $e) {
        header("location: ../auth.php?error=stmtfailed");
        exit();
    } finally {
        $stmt = null;
    }
}
}