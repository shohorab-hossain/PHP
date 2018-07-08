<?php
$sum = 6;
if ($sum>=33 && $sum<=39) {
	echo "you got D";
}elseif ($sum>=40 && $sum<=49) {
	echo "you got C";
}elseif ($sum>=50 && $sum<=54) {
	echo "you got B-";
}elseif ($sum>=55 && $sum<=59) {
	echo "you got B";
}elseif ($sum>=60 && $sum<=64) {
	echo "you got B+";
}elseif ($sum>=65 && $sum<=69) {
	echo "you got A-";
}elseif ($sum>=70 && $sum<=79) {
	echo "you got A";
}elseif ($sum>=80 && $sum<=100) {
	echo "you got A+";
}else{
	echo "another students are fail";
}

?>