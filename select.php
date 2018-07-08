<!DOCTYPE html>
<html>
<head>
	<title>selection</title>
</head>
<body>
<h1>selection</h1>
<form action="select.php" method="POST">
<select name="name">
	<option value="Hasib">1</option>
	<option value="sakib">2</option>
	<option value="taifa">3</option>
	<option value="tonima">4</option>
</select><br><br>
<input type="submit" name="Done">
</form>
</body>
</html>
<?php
if (isset($_POST['Done'])) {
	$name = $_POST['name'];
	echo $name;
}
?>