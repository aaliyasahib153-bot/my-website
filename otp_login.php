<?php
include 'db.php';
session_start();

if(isset($_POST['send'])){
  $mobile = $_POST['mobile'];
  $otp = rand(100000,999999);

  mysqli_query($conn,"UPDATE users SET otp='$otp' WHERE mobile='$mobile'");
  $_SESSION['mobile']=$mobile;

  echo "Demo OTP: <b>$otp</b>"; // real SMS API yahan lagegi
}
?>

<h3>OTP Login</h3>
<form method="post">
<input name="mobile" placeholder="Mobile Number" required>
<button name="send">Send OTP</button>
</form>

<form method="post" action="verify_otp.php">
<input name="otp" placeholder="Enter OTP">
<button>Verify</button>
</form>
