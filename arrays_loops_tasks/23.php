<?php
$str = '5725438';
$i = 0;
$sum = 0;
while ( $i <= strlen($str)) {
	$sum = $sum + $str[$i];
	$i++;
}
echo $sum;
