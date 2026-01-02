<form method="post" enctype="multipart/form-data">
Upload proof of payment:<br>
<input type="file" name="proof">
<button>Submit</button>
</form>

<?php
if($_FILES){
  move_uploaded_file($_FILES['proof']['tmp_name'],
  "uploads/".time().".jpg");
  echo "We will verify and activate access.";
}
?>
