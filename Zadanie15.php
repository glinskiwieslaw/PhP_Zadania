<?php
/**
 * Created by PhpStorm.
 * User: X230 Tablet
 * Date: 2015-11-30
 * Time: 22:38
 */
/*Zadanie 15. Napisz funkcję, która oblicza kolejne wyrazy ciągu Fibonacciego
(http://pl.wikipedia.org/wiki/Ci%C4%85g_Fibonacciego) aż do podanej zmiennej. Użyj do tego rekurencji.*/

$n = 19;

function Fibonacci($element){
    if($element<=2) return 1;
    else return Fibonacci($element-2) + Fibonacci($element-1);
}

$wartosc = Fibonacci($n);
echo($n.' elementem ciagu Fibonacciego jest '.$wartosc);

?>