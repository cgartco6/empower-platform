<?php
include "config.php";

if($_POST){
  $email = $_POST['email'];
  $pass = $_POST['password'];

  $u = $db->query("SELECT * FROM users WHERE email='$email'")->fetch_assoc();
  if($u && password_verify($pass, $u['password'])){
    $_SESSION['user'] = $u['id'];
    $_SESSION['paid'] = $u['paid'];
    header("Location: courses.php");
  } else {
    echo "Login failed";
  }
}
?>

<form method="post">
<input name="email" placeholder="Email"><br>
<input type="password" name="password" placeholder="Password"><br>
<button>Login</button>
</form>
