<?php
/* 
Siendo el valor de las variables: a = 10 b = 12 c = 13 d = 10Encontrar el valor de verdad de cada una de las
siguientes expresiones
a) (( a > b ) O ( a < c ) ) Y ( ( a = c) O ( a >= b ) )
b) (( a >= b ) O ( a < d ) ) Y ( ( a >= d ) Y (c > d ) )
c) NO (a = c ) Y ( c > b )
*/

$A = 10;
$B = 12;
$C = 13;
$D = 10;

$Result1 = (($A > $B) or ($A < $C)) and (($A == $C) or ($A >= $B));
$Result2= (($A >= $B) or ($A < $D)) and (($A >= $D) and ($C > $D));
$Result3 = ! ($A == $C) and ($C > $B);

var_dump($Result1);
var_dump($Result2);
var_dump($Result3);