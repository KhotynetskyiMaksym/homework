<?php
$day = 7;
switch ($day){
    case 1 <= $day && $day <= 5:
        echo "Это рабочий день";
    break;
    case 6 <= $day && $day <= 7:
        echo "Это выходной день";
}