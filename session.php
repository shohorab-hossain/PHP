<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>session</title>
</head>
<body>
<h1>session</h1>
<form action="session1.php" method="POST">
	<b>name:</b><input type="text" name="name" placeholder="name"><br>
	<b>email:</b><input type="text" name="email" placeholder="email"><br>
	<b>password:</b><input type="password" name="password" placeholder="*******"><br>
	<input type="submit" name="Done">
</form>
</body>
</html>