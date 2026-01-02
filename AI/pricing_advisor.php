<?php
include "../config.php";

$s = $db->query("
 SELECT SUM(free_users) f, SUM(paid_users) p
 FROM stats
")->fetch_assoc();

echo "<h3>AI Pricing Advice</h3>";

if($s['f'] > 50 && $s['p'] < 5){
  echo "<p>Suggestion: Try R29 instead of R49 for 7 days.</p>";
} elseif($s['p'] > 10){
  echo "<p>Pricing looks acceptable. Do NOT increase yet.</p>";
} else {
  echo "<p>Collect more data before changing price.</p>";
}
