<?php
mysql_connect("localhost","root","");
$db = mysql_select_db("my_db");
if (!$db) {
	echo mysql_error();
}else{
	echo "connected";
}
?>