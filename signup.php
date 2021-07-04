<?php
  require "header.php";
?>
  <main>
    <h1>Signup</h1>
    <?php
      if (isset($_GET['error'])) {
        if ($_GET["error"] == "emptyfields") {
          echo '<p>Fill in all fields!</p>';
        }
      } else if($_GET["signup"] == "success") {
        echo '<p>Signup Successful!</p>';
      }
     ?>
    <form action="includes/signup.inc.php" method="post">
      <input type="text" name="uid" palceholder="Username">
      <input type="text" name="mail" palceholder="Email">
      <input type="password" name="pwd" palceholder="Password">
      <input type="password" name="pwd-repeat" palceholder="Repeat password">
      <button type="submit" name="signup-submit">Signup</button>
  </main>
  <?php
    require "footer.php";
  ?>
