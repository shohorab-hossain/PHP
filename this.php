<?php
class hasib{
  public function add(){
  	$name = "hasib";
  	echo $name;
  }
  public function sakib(){
  	echo $this->add();
  }
}
$obj = new hasib;
echo $obj->sakib();
?>