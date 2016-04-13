<?php
$week = array('понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье');
foreach ($week as $key => $val) {
	if ($key == '5' || $key == '6') {
		echo "<b>$val</b><br>";
	}
	else {
		echo $val.'<br>';
	}
}
?>