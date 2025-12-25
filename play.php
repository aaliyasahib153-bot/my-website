<?php
session_start();
include 'db.php';

$amt = $_GET['amt'];
$id  = $_SESSION['uid'];

$u = mysqli_fetch_assoc(mysqli_query($conn,"SELECT wallet FROM users WHERE id=$id"));

if($u['wallet'] >= $amt){
  mysqli_query($conn,"UPDATE users SET wallet=wallet-$amt WHERE id=$id");
  header("location:https://play.google.com/store/apps/details?id=com.ludo.king");
} else {
  echo "Low Wallet Balance";
}
