<?php
include "db.php";
$id = $_GET['id'];
$a = mysql_query("SELECT * FROM user");
$b = mysql_fetch_array($a);
if (isset($_POST['Done'])) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $edit = mysql_query("UPDATE user SET name='$name',email='$email',password='$password' WHERE id='$id'");
   if (!$edit) {
   	echo mysql_error();
   }else{
   	header("location:record.php");
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
<form  method="POST">
	<b>name:</b><input type="text" name="name" placeholder="name" value="<?php echo $b['name'];?>"><br>
	<b>email:</b><input type="text" name="email" placeholder="email" value="<?php echo $b['email'];?>"><br>
	<b>password:</b><input type="password" name="password" placeholder="******" value="<?php echo $b['password'];?>"><br>
	<input type="submit" name="Done">
</form>
</body>
</html>