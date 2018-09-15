<?php
$db = mysqli_connect("localhost","root","","register");
?>
<table border="1">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Website</th>
		<th>Comment</th>
		<th>Birthday</th>
		<th>Gender</th>
		<th>Age</th>
		<th>Choose</th>
		<th>Edit</th>
		<th>Del</th>
	</tr>
	<?php
    $sql = "SELECT * FROM user";
    $record = mysqli_query($db,$sql);
    while ($res = mysqli_fetch_array($record)) {
     ?>
     <tr>
     	<td><?php echo $res['id'];?></td>
     	<td><?php echo $res['name'];?></td>
     	<td><?php echo $res['email'];?></td>
     	<td><?php echo $res['website'];?></td>
     	<td><?php echo $res['comment'];?></td>
     	<td><?php echo $res['birthday'];?></td>
     	<td><?php echo $res['gender'];?></td>
     	<td><?php echo $res['age'];?></td>
     	<td><?php echo $res['choose'];?></td>
     	<td><a href="registrationfrom_edit.php?id=<?php echo $res['id'];?>">Edit</a></td>
     	<td><a href="registrationfrom_del.php?id=<?php echo $res['id'];?>">Del</a></td>
     </tr>
     <?php
    }
	?>
</table>