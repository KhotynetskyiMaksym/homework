<?php
$week = array('Mon' => 'понедельник', 'Tue' => 'вторник', 'Wed' => 'среда', 'Thu' => 'четверг', 'Fru' => 'пятница', 'Sat' => 'суббота', 'Sun' => 'воскресенье');
foreach ($week as $key => $val) {
	if ($key == date(D)) {
		$day = $val;
		echo "<b>$day</b><br>";
	}
	else {
		echo $val.'<br>';
	}
}