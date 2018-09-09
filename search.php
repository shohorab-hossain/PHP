<?php
$db = mysqli_connect("localhost","root","","my_db");

?>
<table border="1">
	<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>EMAIL</th>
		<th>PASSWORD</th>
		<th>EDIT</th>
		<th>DEL</th>
	</tr>
	<?php
	if (isset($_POST['search'])) {
	$searchkey = $_POST['search'];
	$record = "SELECT * FROM user WHERE name LIKE '%$searchkey%'";
}else
   $record = "SELECT * FROM user";

    $num = mysqli_query($db,$record);
   while ($res =mysqli_fetch_assoc($num)) {
   	?>
   	<tr>
   		<td><?php echo $res['id'];?></td>
   		<td><?php echo $res['name'];?></td>
   		<td><?php echo $res['email'];?></td>
   		<td><?php echo $res['password'];?></td>
   		
   	</tr>
   	<?php
   }
	?>
<!DOCTYPE html>
<html>
<head>
	<title>search</title>
</head>
<body>
<form  action="" method="POST">
	<input type="text" name="search"><br><br>
	<button>search</button>
</form>
</body>
</html>