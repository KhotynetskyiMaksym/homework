<?php
$a = 9;
$b = 0;
$operator = '/';
if ($operator == '/' && $b == 0) {
		exit("На $b делить нельзя");
}
switch ($operator) {
	case ($operator == '+'): echo $result = $a + $b; break;
	case ($operator == '-'): echo $result = $a - $b; break;
	case ($operator == '/'): echo $result = $a / $b; break;
	case ($operator == '*'): echo $result = $a * $b; break;
	case ($operator == '%'): echo $result = $a % $b; break;
}
?