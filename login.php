<?php
session_start();
include 'db.php';

if(isset($_POST['login'])){
  $mobile = $_POST['mobile'];
  $pass   = $_POST['password'];

  $q = mysqli_query($conn,
  "SELECT * FROM users WHERE mobile='$mobile' AND password='$pass'");
  $u = mysqli_fetch_assoc($q);

  if($u){
    $_SESSION['uid'] = $u['id'];
    header("location:tables.php");
  } else {
    echo "<p style='color:red'>Wrong details</p>";
  }
}
?>

<h2>Player Login</h2>

<form method="post">
<input name="mobile" placeholder="Mobile Number" required><br><br>
<input name="password" placeholder="Password" required><br><br>
<button name="login">Login</button>
</form>

<p>New Player?
<a href="register.php">Register Here</a></p>

