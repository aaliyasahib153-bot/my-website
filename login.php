
<?php
session_start();
include 'db.php';

if(isset($_POST['login'])){
  $email = $_POST['email'];
  $pass = $_POST['password'];

  $q = mysqli_query($conn,
    "SELECT * FROM users WHERE email='$email' AND password='$pass'");
  $data = mysqli_fetch_assoc($q);

  if($data){
    $_SESSION['user'] = $data['id'];
    header("location:wallet.php");
  } else {
    echo "Invalid Login";
  }
}
?>

<form method="post">
<input name="email" placeholder="Email">
<input name="password" placeholder="Password">
<button name="login">Login</button>
</form>
