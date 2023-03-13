<?php

/* Si A y B son de tipo numérico entero cuyo valor es A=10; B=20. Indicar si la siguiente expresión lógica es
verdadera o falsa.
NO (NO(A<>10) O (20>B) Y (A=10) Y falso) Y verdadero
 */
$A = 10;
$B = 20;

$resultado = !(!($A <> 10) or (20 > $B) and ($A == 10) and false) and true;

var_dump($resultado);
