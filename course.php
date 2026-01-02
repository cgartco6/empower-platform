<?php
include "config.php";

$id = intval($_GET['id']);
$course = $db->query("SELECT * FROM courses WHERE id=$id")->fetch_assoc();
if(!$course) die("Course not found");

if(!$course['is_free'] && (!isset($_SESSION['paid']) || $_SESSION['paid']!=1)){
  echo "This course is paid.<br>";
  echo "<a href='pay.php?id=$id'>Pay to unlock</a>";
  exit;
}
?>

<h2><?= htmlspecialchars($course['title']) ?></h2>
<p><?= nl2br(htmlspecialchars($course['description'])) ?></p>

<hr>
<p><b>Lesson Content:</b></p>
<ul>
<li>Lesson 1 – Introduction</li>
<li>Lesson 2 – Practical steps</li>
<li>Lesson 3 – Real-life application</li>
</ul>
