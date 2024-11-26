<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css" />
    <title>GYM DAW</title>
</head>
<body>
    <div class="wrapper">
    <form action="includes/auth.inc.php" method = "post">
        <h1>Autentificare</h1>
        <div class="input-box">
            <input type="text" placeholder="Username "name="username" required>
            <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
            <input type="password" placeholder="Password" name="password" required>
            <i class='bx bxs-lock-alt'></i>
        </div>
        <button type="submit" class="btn "name="submit" value="register">Login</button>
    </form>
</body>
</html>

<?php 
    if (isset($_GET["error"])) {
        if($_GET["error"]=="invalidusername") {
            echo "<p>Nume utilizator invalid!</p>";
        }
        else if ($_GET["error"]=="usernametaken"){
            echo "<p>Parola incorecta!</p>";
        }
        else if ($_GET["error"]=="none"){
            echo "<p>Succes!</p>";
        }
        else if ($_GET["error"]=="wronglogin"){
            echo "<p>Parola incorecta!</p>";
        }
    }
?>