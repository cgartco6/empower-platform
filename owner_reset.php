<?php
session_start();
if(!isset($_SESSION['owner'])) die("Access denied");

if($_POST){
  $new = password_hash($_POST['newpass'], PASSWORD_DEFAULT);
  echo "<p>Replace the password hash in <b>owner_login_x92k.php</b> with:</p>";
  echo "<textarea cols='80' rows='2'>$new</textarea>";
}
?>

<form method="post">
<input type="password" name="newpass" placeholder="New owner password">
<button>Generate new hash</button>
</form>
