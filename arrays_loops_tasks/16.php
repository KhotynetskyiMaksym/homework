<?php
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($arr as $key => $val) {
	if ($val == 3 || $val == 6 || $val == 9) {
		echo "$val <br>";
	}
	else {
		echo "$val, ";
	}
}
