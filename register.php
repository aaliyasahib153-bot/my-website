
<?php
include 'db.php';

if(isset($_POST['register'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $pass = $_POST['password'];

  mysqli_query($conn,
    "INSERT INTO users (name,email,password)
     VALUES ('$name','$email','$pass')");

  echo "Registration Successful";
}
?>

<form method="post">
<input name="name" placeholder="Name" required>
<input name="email" placeholder="Email" required>
<input name="password" placeholder="Password" required>
<button name="register">Register</button>
</form>
