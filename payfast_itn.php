<?php include "config.php";
$today=date("Y-m-d");
$amount=$_POST['amount_gross'] ?? 0;

$db->query("INSERT INTO stats (day,paid_users,revenue)
VALUES ('$today',1,$amount)
ON DUPLICATE KEY UPDATE paid_users=paid_users+1, revenue=revenue+$amount");
?>
