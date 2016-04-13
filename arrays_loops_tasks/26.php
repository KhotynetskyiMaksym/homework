<?php
for($i = 0; $i < 20; $i++){
	$arr[] = rand(-100, 100);
}
echo '<pre>';
print_r($arr);
echo '</pre>';
$multi1 = 1;
$multi2 = 1;
foreach ($arr as $key => $val) {
	if (($val > 0) && ($key%2 == 0)){
		$multi1 = $val * $multi1;
	}
	elseif (($val > 0) && ($key%2 !== 0)){
		$multi2 = $val * $multi2;
	}
}
echo 'произведение тех элементов, которые больше ноля и у которых парные индексы = '.$multi1;
echo '<br>произведение тех элементов, которые больше ноля и у которых непарные индексы = '.$multi2;
