<?php
$arr = array('green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой');
foreach ($arr as $key => $item) {
	$en[] = $key;
	$ru[] = $item;
}
print_r($en);
echo "<br>";
print_r($ru);
