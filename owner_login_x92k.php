<?php
session_start();
$hash = password_hash("CHANGE_THIS_PASSWORD", PASSWORD_DEFAULT);

if($_POST){
 if(password_verify($_POST['password'],$hash)){
   $_SESSION['owner']=1;
   header("Location: owner_dashboard.php");
 }
}
?>
<form method="post">
<input type="password" name="password">
<button>Login</button>
</form>
