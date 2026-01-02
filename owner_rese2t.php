<?php
session_start();
if(!isset($_SESSION['owner'])) die("Access denied");

if($_POST){
  echo "Replace password in owner_login.php with this hash:";
  echo password_hash($_POST['newpass'], PASSWORD_DEFAULT);
}
?>
<form method="post">
<input type="password" name="newpass" placeholder="New password">
<button>Generate New Password</button>
</form>
