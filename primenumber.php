<?php
$sum = 19;
for ($i=0; $i <=$sum ; $i++) { 
	for ($j=2; $j <=$i-1 ; $j++) { 
		if ($i%$j==0) {
			echo " not prime";
			break;
		}
	}
	if ($i==$j) {
		echo " prime";
	}
}
?>