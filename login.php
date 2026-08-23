<?php
    require_once "header.php";
    require_once "connection.php";
?>

<h1> Log in </h1>
<form action="register.php" method="POST">
  <div>
    <label for="email">Email Address:</label><br>
    <input type="email" id="email" name="email" required>
  </div>
  <br>
  <div>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required>
  </div>
  <br>
  <br>
  <button type="submit" name="register">Log-in</button>
</form>

<?php
    require_once "footer.php";
?>