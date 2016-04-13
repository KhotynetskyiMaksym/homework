<?php
$number = '442158755745';
$search = '5';
$count = 0;
foreach (str_split($number) as $num) {
	if ($num == $search) {
		$count++;
	}
}
echo "цифра $search встречается в числе $number $count раз(а)";
?>