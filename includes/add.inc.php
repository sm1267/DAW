<?php
require_once '../classes/user.classes.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'];
    $plan = $_POST['plan'];
    $role = $_POST['role'];

    $userObj = new User();
    $userObj->addUser($user, $plan, $role);

    echo "User added successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYM DAW</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
    <form method="POST">
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Nume:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="user" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Plan:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="plan" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Rol:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="role" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="offset-sm-3 col-sm-3 d-grid">
                <button type="submit" class="btn btn-primary">Create User</button>
            </div>
            <div class="col-sm-3 d-grid">
                <a class="btn btn-outline-primary" href="../dashboard.php" role="button">Cancel</a>
            </div>
        </div>
    </form>
    </div>
<body>
</html>
