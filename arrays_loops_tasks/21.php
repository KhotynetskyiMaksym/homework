<?php 

$number = 9;
$count = 0;
for($i = 1; $i <= $number; $i++)
{		
	$count++;
	for($a = 0; $a < $count; $a++)
	{
		echo $i;
	}
	echo '<br/>';
}