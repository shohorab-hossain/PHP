<?php
include "db.php";
?>
<table border="1">
	<tr>
		<td>ID</td>
		<td>NAME</td>
		<td>EMAIL</td>
		<td>PASSWORD</td>
		<td>EDIT</td>
		<td>DEL</td>
	</tr>
	<?php
	$record = mysql_query("SELECT * FROM user");
	while ($num = mysql_fetch_array($record)) {
		?>
		<tr>
			<td><?php echo $num['id'];?></td>
			<td><?php echo $num['name'];?></td>
			<td><?php echo $num['email'];?></td>
			<td><?php echo $num['password'];?></td>
			<td><a href="edit.php?id=<?php echo $num['id'];?>">edit</a></td>
			<td><a href="del.php?id=<?php echo $num['id'];?>">del</a></td>
		</tr>
		<?php
	}
	?>
</table>