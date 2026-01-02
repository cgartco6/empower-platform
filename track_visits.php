<?php
include "config.php";
$today = date("Y-m-d");
$db->query("INSERT INTO stats (day,visitors)
VALUES ('$today',1)
ON DUPLICATE KEY UPDATE visitors=visitors+1");
?>
