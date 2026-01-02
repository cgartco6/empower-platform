<?php include "config.php";
$today=date("Y-m-d");
$db->query("INSERT INTO stats (day,free_users)
VALUES ('$today',1)
ON DUPLICATE KEY UPDATE free_users=free_users+1");
?>

<h2>FREE Starter Course</h2>
<ul>
<li>Lesson 1: How learning online really works</li>
<li>Lesson 2: Avoiding scams</li>
<li>Lesson 3: What skills matter</li>
</ul>

<p>Want the full course? Only <b>R29</b></p>
<a href="courses.php">Upgrade</a>
