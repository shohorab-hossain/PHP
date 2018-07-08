<?php
session_start();
$db = mysqli_connect("localhost","root","","test");
if (isset($_POST['register_btn'])) {
	$username = mysql_real_escape_string($_POST['username']);
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);
	$password1 = mysql_real_escape_string($_POST['password1']);
	if ($password==$password) {
		$password=md5($password1);
		$sql = "INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";
		mysqli_query($db,$sql);
		$_SESSION['message']="now login";
		$_SESSION['username']=$username;
		header("location:home.php");
	}else{
		$_SESSION['message']="the two password doesnot match";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>register</title>
</head>
<body>
<h1>register</h1>
<?php
if (isset($_SESSION['message'])) {
    echo "".$_SESSION['message']."";
    unset($_SESSION['message']);
}
?>
<form action="register.php" method="POST">
	<table>
		<tr>
			<td>username:</td>
			<td><input type="text" name="username" placeholder="username"></td>
		</tr>
		<tr>
			<td>email:</td>
			<td><input type="text" name="email" placeholder="email"></td>
		</tr>
		<tr>
			<td>password:</td>
			<td><input type="password" name="password" placeholder="********"></td>
		</tr>
		<tr>
			<td>password again:</td>
			<td><input type="password" name="password1" placeholder="********"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="register_btn" value="Done"></td>
		</tr>
	</table>
</form>
</body>
</html>