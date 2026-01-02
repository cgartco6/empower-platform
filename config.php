<?php
$db = new mysqli("localhost","DB_USER","DB_PASS","DB_NAME");
if ($db->connect_error) die("DB Error");
session_start();
?>
