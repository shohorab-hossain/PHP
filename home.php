<?php
session_start();
$db = mysqli_connect("localhost","root","","test");
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
<h2>Home</h2>
<h3>Welcome <?php echo $_SESSION['username'];?></h3>
<a href="logout.php">logout</a>
</body>
</html>