<?php
include 'db.php';

if(isset($_POST['reg'])){
  mysqli_query($conn,"INSERT INTO users(name,mobile,password)
  VALUES('$_POST[name]','$_POST[mobile]','$_POST[password]')");

  header("location:login.php");
}
?>

<h2>Player Register</h2>

<form method="post">
<input name="name" placeholder="Name" required><br><br>
<input name="mobile" placeholder="Mobile" required><br><br>
<input name="password" placeholder="Password" required><br><br>
<button name="reg">Register</button>
</form>

<p>Already Registered?
<a href="login.php">Login</a></p>
