<?php
$age = 16;
if ( $age < 18 ) {
    echo "Вам еще рано работать";
}elseif ( 18 <= $age && $age <= 59 ) {
    echo "Вам еще работать и работать";
} else {
    echo "Вам пора на пенсию";
}