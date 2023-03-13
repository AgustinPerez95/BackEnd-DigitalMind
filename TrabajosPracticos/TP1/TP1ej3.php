<?php
/* 
Si a = 33, determinar si la siguiente operación es VERDADERA o FALSA.
a) NO (( a > 10 ) Y ( a < 20 ) )
b) NO (( a> 10 ) O NO ( a < 20 ) */

$A = 33;

$Result1 = !(($A > 10) and ($A < 20));
$Result2 = !(($A > 10) or !($A < 20));

var_dump($Result1);
var_dump($Result2);
