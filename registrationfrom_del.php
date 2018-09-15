<?php
$db = mysqli_connect("localhost","root","","register");
$id = $_GET['id'];
$sql = "DELETE FROM user WHERE id='$id'";
$del = mysqli_query($db,$sql);
header("location:registrationfrom1.php");
?>