<?php
include "db.php";
$id = $_GET['id'];
$del = mysql_query("DELETE FROM user WHERE id='$id'");
header("location:record.php");
?>