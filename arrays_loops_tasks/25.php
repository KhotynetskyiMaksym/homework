<?php
for($i=0; $i<10; $i++){
$arr[] = rand(0, 20);
}
echo '<pre>';
print_r($arr);
echo '</pre>';

$max = max($arr);
$min = min($arr);

foreach ($arr as $key => $val) {
	if ($val == $max){
		$arr[$key] = $min;
	}
	if ($val == $min){
		$arr[$key] = $max;
	}
}
echo "<br>";
echo '<pre>';
print_r($arr);
echo '</pre>';