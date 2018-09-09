<?php
$file = fopen("file.txt", "r");
while (!feof($file)) {
	$content = fgets($file);
	$carray = explode(",", $content);
	echo "<pre>";
	var_dump($carray);
}
?>