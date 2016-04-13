<?php
$arr = array(26, 17, 136, 12, 79, 15);
foreach ($arr as $value) {
	$result = $result + pow($value, 2);
	echo "$value ";
}
echo "<br> sum = $result <br>";
