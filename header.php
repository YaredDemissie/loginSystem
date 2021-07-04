<?php
  session_start();

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <header>
      <nav class="nav-header-main">
        <a calss="header-logo" href="index.php">
          <img src="8TAEn5pec.png" alt="logo" height=60 width=30>
        </a>
        <ul>
          <li><a href="index.php">Home</li>
          <li><a href="#">Portfolio</li>
          <li><a href="#">About me</li>
          <li><a href="#">Contact</li>
        </ul>
      </nav>
      <div class="header-login">
        <?php
          if (isset($_SESSION['userId'])) {
            echo '<form action="includes/logout.inc.php" method="post">
                    <button type="submit" name="logout-sumbit">Logout</button>
                  </form>';
          } else {
            echo '<form action="includes/login.inc.php" method="post">
              <input type="text" name="mailuid" placeholder="Username/Email...">
              <input type="password" name="pwd" placeholder="Password...">
              <button type="submit" name="login-sumbit">Login</button>
              </form>
              <a href="signup.php">Signup</a>';
          }
         ?>


        </div>
    </header>
