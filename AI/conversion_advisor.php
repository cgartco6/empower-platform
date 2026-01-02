<?php
include "../config.php";
$r=$db->query("SELECT SUM(free_users) f, SUM(paid_users) p FROM stats")->fetch_assoc();
if($r['f']>0){
  $rate = round(($r['p']/$r['f'])*100,2);
  echo "Conversion rate: $rate%";
}
?>
