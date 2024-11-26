<?php
include 'includes/db.inc.php';
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: auth.php");
    exit;
}

$user_id = intval($_SESSION['userid']);
$message = "";

$sql = "SELECT * FROM users WHERE id = $user_id";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
} else {
    die("User not found. Please check the database.");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['update'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);

        $update_sql = "UPDATE users SET user = '$name'WHERE id = $user_id";
        if (mysqli_query($conn, $update_sql)) {
            $message = "Nume modificat cu succes!";
            $user['user'] = $name;
        } else {
            $message = "Error: " . mysqli_error($conn);
        }
    } elseif (isset($_POST['delete'])) {
        $delete_sql = "DELETE FROM users WHERE id = $user_id";
        if (mysqli_query($conn, $delete_sql)) {
            session_destroy();
            header("Location: auth.php");
            exit;
        } else {
            $message = "Error: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Profile</title>
</head>
<body>
    <div class="wrapper">
    <h1>Schimbă Numele</h1>
    <?php if ($message): ?>
        <p><?= htmlspecialchars($message) ?></p>
    <?php endif; ?>
    <form method="POST">
        <div class="input-box">
        <input type="text" id="name" name="name" value="<?= htmlspecialchars($user['name'] ?? '') ?>" required><br>
        </div>
        <button class="btn" type="submit" name="update">Update</button>
        <button class="btn" type="submit" name="delete" onclick="return confirm('Ești sigur că vrei să ștergi contul?');">Șterge Contul</button>
    </form>
</body>
</html>



