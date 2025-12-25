<?php
session_start();
include 'db.php';

if(isset($_POST['login'])){
  $q = mysqli_query($conn,
  "SELECT * FROM users WHERE mobile='$_POST[mobile]' AND password='$_POST[password]'");
  $u = mysqli_fetch_assoc($q);
  if($u){
    $_SESSION['uid']=$u['id'];
    header("location:tables.php");
  } else {
    echo "Wrong Details";
  }
}
?>

<form method="post">
<input name="mobile" placeholder="Mobile">
<input name="password" placeholder="Password">
<button name="login">Login</button>
</form>
