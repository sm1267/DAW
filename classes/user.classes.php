<?php
require_once 'dbh.classes.php';

class User extends Dbh {
    public function getConnection() {
        return $this->connect(); 
    }

    public function addUser($user, $plan, $role) {
        $conn = $this->getConnection();
        $stmt = $conn->prepare("INSERT INTO users (user, plan, role) VALUES (?, ?, ?)");
        $stmt->execute([$user, $plan, $role]);
    }

    public function getUserById($id) {
        $conn = $this->connect();
        $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function editUser($id, $user, $plan, $role) {
        $conn = $this->connect();
        $stmt = $conn->prepare("UPDATE users SET user = ?, plan = ?, role = ? WHERE id = ?");
        $stmt->execute([$user, $plan, $role, $id]);
    }

    public function removeUser($id) {
        $conn = $this->connect();
        $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
        $stmt->execute([$id]);
    }
}
?>
