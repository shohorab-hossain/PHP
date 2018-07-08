<!DOCTYPE html>
<html>
<head>
	<title>isset</title>
</head>
<body>
<form action="isset.php" method="POST">
	<b>name:</b><input type="text" name="name" placeholder="name"><br><br>
	<b>email:</b><input type="text" name="email" placeholder="email"><br><br>
	<b>password:</b><input type="password" name="password" placeholder="*******"><br><br>
	<input type="submit" name="Done">
</form>
</body>
</html>
<?php
if (isset($_POST['Done'])) {
    $name = $_POST['name'];
    echo $name;
    echo "</br>";

    $email = $_POST['email'];
    echo $email;
    echo "</br>";

    $password = $_POST['password'];
    echo $password;
    echo "</br>";
}
?>