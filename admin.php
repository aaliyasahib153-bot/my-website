<?php
session_start();
include 'db.php';

if(isset($_POST['login'])){
  $u=$_POST['username'];
  $p=$_POST['password'];

  $q=mysqli_query($conn,"SELECT * FROM admin WHERE username='$u' AND password='$p'");
  if(mysqli_fetch_assoc($q)){
    $_SESSION['admin']=true;
  }
}
?>

<?php if(!isset($_SESSION['admin'])){ ?>
<form method="post">
<input name="username" placeholder="Admin ID">
<input name="password" placeholder="Password">
<button name="login">Login</button>
</form>
<?php } else { ?>

<h2>Admin Panel</h2>
<?php
$users = mysqli_query($conn,"SELECT * FROM users");
while($u=mysqli_fetch_assoc($users)){
?>
<form method="post">
<?php echo $u['name']; ?> (₹<?php echo $u['wallet']; ?>)
<input type="hidden" name="uid" value="<?php echo $u['id']; ?>">
<button name="add">Add ₹50</button>
</form>
<?php } ?>

<?php
if(isset($_POST['add'])){
  $uid=$_POST['uid'];
  mysqli_query($conn,"UPDATE users SET wallet=wallet+50 WHERE id=$uid");
  header("refresh:0");
}
?>
<?php } ?>
