<?php
$rows = 20;
$cols = 20;
$colors = ['red','yellow','blue','gray','maroon','brown','green']; 
echo '<table border="1">'; 
for($tr = 1; $tr <= $rows; $tr++){ 
	echo '<tr>'; 
	for($td = 1; $td <= $cols; $td++){ 
		echo '<td style="color:black;background-color:'.$colors[rand(0, count($colors))].'">'.rand(1, 1000).'</td>'; 
	} 
	echo '</tr>'; 
} 
echo '</table>'; 
