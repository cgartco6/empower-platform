<?php include "config.php";
$id=$_GET['id'];
$c=$db->query("SELECT * FROM courses WHERE id=$id")->fetch_assoc();
?>

<form action="https://www.payfast.co.za/eng/process" method="post">
<input type="hidden" name="merchant_id" value="YOUR_ID">
<input type="hidden" name="merchant_key" value="YOUR_KEY">
<input type="hidden" name="amount" value="<?= $c['price'] ?>">
<input type="hidden" name="item_name" value="<?= $c['title'] ?>">
<input type="hidden" name="notify_url" value="https://yourdomain/payfast_itn.php">
<button>Pay R<?= $c['price'] ?></button>
</form>

<p>Or <a href="eft_upload.php">Pay via EFT</a></p>
