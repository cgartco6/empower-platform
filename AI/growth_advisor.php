<?php
include "../config.php";

$stats = $db->query("
 SELECT 
   SUM(visitors) v,
   SUM(free_users) f,
   SUM(paid_users) p,
   SUM(revenue) r
 FROM stats
")->fetch_assoc();

$advice = [];

if($stats['v'] < 500){
  $advice[] = "Focus on posting daily. Reach is still building.";
}

if($stats['f'] > 0 && $stats['p'] == 0){
  $advice[] = "People trust you, but price or messaging may need softening.";
}

if($stats['p'] > 0){
  $advice[] = "Sales detected. Keep message wording EXACTLY the same.";
}

echo "<h3>AI Growth Advice</h
