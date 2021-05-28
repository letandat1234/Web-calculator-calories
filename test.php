<?php

if (isset($_POST['submit']))
{
	$target = "upload/";
	$target = $target . basename($_FILES['uploaded']['name']);
	$ok = 1;
	if (move_uploaded_file($_FILES['uploaded']['tmp_name'], $target))
	{
		echo "The file " . basename($_FILES['uploaded']['name']) . " has been uploaded";
	}
	else
	{
		echo "Sorry, there was a problem uploading your file.";
	}
}

?>
<html>
<body>
<form action="test.php" enctype="multipart/form-data" method="post"> 
Please choose a file: 
<input name="uploaded" type="file" /><br /> 
<input type="submit" name="submit" value="Upload" />
</form>
</body>
</html>
