<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css" />
    <title>GYM DAW</title>
  </head>
  <body>
    <nav>
      <div class="nav__logo">
        <a href="#"><img src="assets/logo.png" alt="logo" /></a>
      </div>
      <?php
        if (isset($_SESSION["user"])) {
          echo "<a href='profile.php' class='btn'>Profil</a>";
          echo "<a href='includes/logout.inc.php' class='btn'>Log Out</a>";
        }
        else {
          echo "<a href='auth.php' class='btn'>Join Now</a>";
        }
      ?>
    </nav>