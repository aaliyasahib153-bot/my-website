<?php
session_start();
if(!isset($_SESSION['uid'])){
  header("location:login.php");
}
include 'db.php';

$u = mysqli_fetch_assoc(
mysqli_query($conn,"SELECT * FROM users WHERE id=".$_SESSION['uid']));
?>

<h3>Welcome <?php echo $u['name']; ?></h3>
<h4>Wallet: ₹<?php echo $u['wallet']; ?></h4>

<table border="1" cellpadding="10">
<tr>
<th>Table</th><th>Entry</th><th>Win</th><th>Play</th>
</tr>

<tr>
<td>Classic</td>
<td>₹50</td>
<td>₹90</td>
<td><a href="play.php?amt=50">PLAY</a></td>
</tr>
</table>

<br>
<a href="logout.php">Logout</a>
