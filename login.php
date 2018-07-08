<?php
session_start();
$db = mysqli_connect("localhost","root","","test");
if (isset($_POST['login_btn'])) {
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	$password=md5($password);
		$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$num = mysqli_query($db,$sql);
		if (mysqli_num_rows($num)==1) {
		
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
<form action="login.php" method="POST">
	<table>
		<tr>
			<td>username:</td>
			<td><input type="text" name="username" placeholder="username"></td>
		</tr>
		
		<tr>
			<td>password:</td>
			<td><input type="password" name="password" placeholder="********"></td>
		</tr>
		
		<tr>
			<td></td>
			<td><input type="submit" name="login_btn" value="Done"></td>
		</tr>
	</table>
</form>
</body>
</html>