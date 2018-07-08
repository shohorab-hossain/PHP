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
<?php
if ($_POST['name']=="hasib" && $_POST['email']=="man.woman.people@gmail.com" && $_POST['password']=="hasib4321") {
	echo "Hello"." ".$_POST['name']."</br>"."your email is : ".$_POST['email']."</br>"."your password is : ".$_POST['password'];
}else{
	die("the password does nit match");
}
?>
<br><br>
<a href="session2.php">logout</a>
</body>
</html>