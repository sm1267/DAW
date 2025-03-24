<?php
require_once '../classes/user.classes.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $userObj = new User();
    $user = $userObj->getUserById($id);

    if (!$user) {
        die("User not found.");
    }
} else {
    die("Invalid request.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <form action="update.inc.php" method="POST">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" for="user">User:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="user" name="user" value="<?= htmlspecialchars($user['user']) ?>" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" for="plan">Plan:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="plan" name="plan" value="<?= htmlspecialchars($user['plan']) ?>" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" for="role">Rol:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="role" name="role" value="<?= htmlspecialchars($user['role']) ?>" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="offset-sm-3 col-sm-3 d-grid">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            <div class="col-sm-3 d-grid">
                <a class="btn btn-outline-primary" href="../dashboard.php" role="button">Cancel</a>
            </div>
        </div>
    </form>
</body>
</html>