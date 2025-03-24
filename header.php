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
      <ul class="nav__links">
      <?php
        if (isset($_SESSION["role"])) {
          if($_SESSION['role'] == 'admin'){
            echo "<li class='link'><a href='contact.php'>Contact</a></li>";
            echo "<li class='link'><a href='grafic.php'>Grafic</a></li>";
            echo "<li class='link'><a href='dashboard.php'>Dashboard</a>";
            echo "<li class='link'><a href='includes/logout.inc.php'>Log Out</a>";
          }
          else {
            echo "<li class='link'><a href='contact.php'>Contact</a></li>";
            echo "<li class='link'><a href='grafic.php'>Grafic</a></li>";
            echo "<li class='link'><a href='#'>Profil</a>";
            echo "<li class='link'><a href='includes/logout.inc.php'>Log Out</a>";
          }
        }
        else {
          echo "<li class='link'><a href='contact.php'>Contact</a></li>";
          echo "<li class='link'><a href='grafic.php'>Grafic</a></li>";
          echo "<li class='link'><a href='auth.php'>Join Now</a></li>";
        }
      ?>
      </ul>
    </nav>