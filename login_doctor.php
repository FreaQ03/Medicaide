<?php
  $_SESSION['userType'] = "doctor";
?>

<form action="authenticateDoctor.php" method="post">
  <div class="txt_field">
    <input type="text" name="email" required>
    <span></span>
    <label>Email</label>
  </div>
  <div class="txt_field">
    <input type="password" name="password" required>
    <span></span>
    <label>Password</label>
  </div>
  <input type="submit" value="Login">
  <div class="signup_link">
    Not a member? <a href="register.php">Signup</a>
  </div>
</form>