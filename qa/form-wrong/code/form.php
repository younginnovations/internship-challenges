<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["document"]["name"]);
if(isset($_POST["submit"])) {
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    print("Thank you. Your file is uploaded.");
}
?>
<form method="POST" enctype="multipart/form-data">
Select document to upload (only pdf are allowed): <input type="file" name="document">
<input type="submit" value="Upload Document" name="submit">
</form>
