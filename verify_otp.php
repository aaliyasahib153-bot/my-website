<?php
session_start();
include 'db.php';

$mobile = $_SESSION['mobile'];
$otp = $_POST['otp'];

$q = mysqli_query($conn,
"SELECT * FROM users WHERE mobile='$mobile' AND otp='$otp'");
$u = mysqli_fetch_assoc($q);

if($u){
  $_SESSION['uid']=$u['id'];
  mysqli_query($conn,"UPDATE users SET otp=NULL WHERE id=".$u['id']);
  header("location:tables.php");
} else {
  echo "Wrong OTP";
}
