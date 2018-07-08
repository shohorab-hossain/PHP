<?php
include "db.php";
if (isset($_POST['Done'])) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $insert = mysql_query("INSERT INTO user(name,email,password) VALUES('$name','$email','$password')");
   if (!$insert) {
   	echo mysql_error();
   }else{
   	echo "connected";
   }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>insert</title>
</head>
<body>
<h1>insert</h1>
<form action="insert.php" method="POST">
	<b>name:</b><input type="text" name="name" placeholder="name"><br>
	<b>email:</b><input type="text" name="email" placeholder="email"><br>
	<b>password:</b><input type="password" name="password" placeholder="******"><br>
	<input type="submit" name="Done">
</form>
</body>
</html>