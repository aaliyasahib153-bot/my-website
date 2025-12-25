<?php
session_start();
include 'db.php';
if(!isset($_SESSION['uid'])) header("location:login.php");

$u = mysqli_fetch_assoc(
mysqli_query($conn,"SELECT * FROM users WHERE id=".$_SESSION['uid']));
?>

<h3>Wallet Balance: ₹<?php echo $u['wallet']; ?></h3>

<form method="post" action="wallet_action.php">
<input name="amount" placeholder="Amount">
<button name="add">Add Money</button>
<button name="withdraw">Withdraw</button>
</form>

<a href="tables.php">Back</a>

