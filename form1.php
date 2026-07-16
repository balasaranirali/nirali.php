<form action="" method="POST" enctype="multipart/form-data">
	upload file<input type="file" name="uploadfile">
	<input type="submit" name="upload" value="upload">
</form>

<?php
$target_path="dir/";
$target_path=$target_path.basename($_FILES['uploadfile']['name']);
if(move_uploaded_file($_FILES['uploadfile']['tmp_name'], $target_path))
{
	echo"file is uploaded";
	echo"<br>";
	echo$_FILES['uploadfile']['type'];

}
?>
