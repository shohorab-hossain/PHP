<?php
class Product{
	public function add(){
     $a = 100+100;
     return $a;
	}
	public function mult($b){
	 $a = $b*20;	
	 return $a;
	}
	public function devision($b,$c){
	$a = $b/$c;
	return $a;	
	}
}
$obj = new Product;
echo $obj->add();
echo "</br>";
echo $obj->mult(30);
echo "</br>";
echo $obj->devision(10,70);
echo "</br>";
$d = $obj->mult(70);
echo $d
?>