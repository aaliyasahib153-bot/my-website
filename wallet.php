<?php
session_start();
include 'db.php';

$id = $_SESSION['user'];
$user = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM users WHERE id=$id"));

if(isset($_POST['play'])){
  if($user['wallet'] >= 5){
    mysqli_query($conn,"UPDATE users SET wallet=wallet-5 WHERE id=$id");
    echo "Game Played (-₹5)";
  } else {
    echo "Low Balance";
  }
}
?>

<h2>Wallet Balance: ₹<?php echo $user['wallet']; ?></h2>

<form method="post">
<button name="play">Play Ludo</button>
</form>
