<!DOCTYPE html>
<html>
<head>
	<title>photo upload</title>
</head>
<body>
	<?php
$upload_dir = "images";
if (isset($_FILES['image'])) {
	$filename = $_FILES['image']['name'];
	$filetype = $_FILES['image']['type'];
	echo "name = $filename </br>";
	echo "type = $filetype </br>";
	echo "path = ".$_FILES['image']['tmp_name']."</br>";
	echo "size = ".$_FILES['image']['size']."</br>";
	if ($filetype=="image/jpeg" or $filetype=="image/gif") {
		copy($_FILES['image']['tmp_name'], "$upload_dir/$filename")or die("does not copy");
		echo "<img src=\"$upload_dir/$filename\"width=\"200\",height=\"150\"<p>";
	}
}
	?>
	<h1>photo upload</h1>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
	<input type="file" name="image"><br><br>
	<button>submit</button>
</form>
</body>
</html>