<?php
$file = fopen("file.txt", "r");
while (!feof($file)) {
	$contect = fgets($file);
	$carray = explode(",", $contect);
	echo "<pre>";
	var_dump($carray);
}
?>