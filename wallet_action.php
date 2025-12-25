<?php
session_start();
include 'db.php';
$id=$_SESSION['uid'];
$amt=$_POST['amount'];

if(isset($_POST['add'])){
  mysqli_query($conn,"UPDATE users SET wallet=wallet+$amt WHERE id=$id");
}

if(isset($_POST['withdraw'])){
  $u=mysqli_fetch_assoc(mysqli_query($conn,"SELECT wallet FROM users WHERE id=$id"));
  if($u['wallet'] >= $amt){
    mysqli_query($conn,"UPDATE users SET wallet=wallet-$amt WHERE id=$id");
  } else {
    echo "Low Balance";
    exit;
  }
}
header("location:wallet.php");
