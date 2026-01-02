<?php include "config.php"; ?>
<h2>Paid Courses</h2>

<?php
$res=$db->query("SELECT * FROM courses WHERE is_free=0");
while($c=$res->fetch_assoc()){
  echo "<p><b>{$c['title']}</b><br>
  {$c['description']}<br>
  R{$c['price']}<br>
  <a href='pay.php?id={$c['id']}'>Buy</a></p><hr>";
}
?>
