<?php
class School{
	public $name = "modern school";
	public $address = "ranir bazar";
	public $phone = 1858032726;
	public $road = 12.9;
}
$obj = new School;
var_dump($obj);
echo "</br>";
echo $obj->name;
echo "</br>";
echo $obj->address;
echo "</br>";
echo $obj->phone;
echo "</br>";
echo $obj->road;
?>