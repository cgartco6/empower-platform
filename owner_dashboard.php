<?php include "config.php";
if(!isset($_SESSION['owner'])) die("Denied");

$res=$db->query("SELECT * FROM stats ORDER BY day DESC");
echo "<h2>Revenue Dashboard</h2>";
while($r=$res->fetch_assoc()){
 echo "{$r['day']} | Visitors {$r['visitors']} | Paid {$r['paid_users']} | R{$r['revenue']}<br>";
}
?>
