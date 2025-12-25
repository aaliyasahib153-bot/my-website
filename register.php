<?php
include 'db.php';
if(isset($_POST['reg'])){
  mysqli_query($conn,"INSERT INTO users(name,mobile,password)
  VALUES('$_POST[name]','$_POST[mobile]','$_POST[password]')");
  echo "Registered Successfully";
}
?>

<form method="post">
<input name="name" placeholder="Name" required>
<input name="mobile" placeholder="Mobile" required>
<input name="password" placeholder="Password" required>
<button name="reg">Register</button>
</form>
<a href="login.php">Login</a>
