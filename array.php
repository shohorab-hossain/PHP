<?php
$array = array("hasib","sakib","taifa","tonima","pito","sayeem","shoib","kawser");
echo $array[0];
echo "</br>";
echo $array[3];
echo "</br>";
echo $array[1];
echo "</br>";
echo $array[4];
echo "</br>";
echo $array[2];
echo "</br>";
print_r($array);
echo "</br>";
echo "<pre>";
print_r($array);
echo "</pre>";
echo "</br>";
var_dump($array);
echo "</br>";
$array1 = array(10,30,12,45,15,5);
echo max($array1);
echo "</br>";
echo min($array1);
echo "</br>";
echo count($array1);
echo "</br>";
print_r($array1);
echo "</br>";
echo "<pre>";
print_r($array1);
echo "</pre>";
echo "</br>";
sort($array1);
echo "<pre>";
print_r($array1);
echo "</pre>";
echo "</br>";
foreach ($array as $key => $value) {
	echo $value."</br>";
}
?>