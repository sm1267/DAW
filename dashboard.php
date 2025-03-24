<?php

session_start();

if (!isset($_SESSION["userid"]) || !isset($_SESSION["role"])) {
    header("Location: index.php?message=PleaseLogin");
    exit();
}

if ($_SESSION['role'] !== 'admin') {
    header("Location: index.php?message=AccessDenied");
    exit();
}

require_once 'classes/dashboard.classes.php';

$dashboard = new Dashboard();
$conn = $dashboard->getConnection(); 
$stmt = $conn->query("SELECT * FROM users");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
    <div class = "container my-5">
            <h2>Membri </h2>
            <a class ="btn btn-primary" href="includes/add.inc.php" role="button"> Membru Nou </a>
            <a class ="btn btn-primary" href="includes/export-pdf.php" role="button"> Export PDF </a>
            <br>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Nume</th>
                    <th>Plan</th>
                    <th>Inregistrat la</th>
                    <th> Rol </th>
                    <th>Actiuni</th>
                </tr>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['user'] ?></td>
                    <td><?= $user['plan'] ?></td>
                    <td><?= $user['reg_date'] ?></td>
                    <td><?= $user['role'] ?></td>
                    <td>
                        <a class='btn btn-primary btn-sm' href="includes/edit.inc.php?id=<?= $user['id'] ?>">Edit</a>
                        <a class='btn btn-primary btn-sm' href="includes/delete.inc.php?id=<?= $user['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
    </div>
</body>
</html>