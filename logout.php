<?php
session_start();
session_destroy();
unset($_SESSION['username']);
$_SESSION['message']="now logout";
header("location:login.php");
?>