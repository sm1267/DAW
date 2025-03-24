<?php
require_once '../classes/user.classes.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $user = $_POST['user'];
    $plan = $_POST['plan'];
    $role = $_POST['role'];

    $userObj = new User();
    $userObj->editUser($id, $user, $plan, $role);

    header("Location: ../dashboard.php?message=UserUpdated");
    exit();
} else {
    die("Invalid request method.");
}
?>
