<?php
/**
 * Created by PhpStorm.
 * User: X230 Tablet
 * Date: 2015-11-30
 * Time: 23:14
 */
/*Zadanie *. Napisz funkcję, która oblicza kolejne wyrazy ciągu Fibonacciego
(http://pl.wikipedia.org/wiki/Ci%C4%85g_Fibonacciego) aż do podanej zmiennej. Nie używaj do tego rekurencji.*/


function fib ($x) {
    $pierwszy = 1;
    $drugi = 1;
    if( $x ==1) {
        return 1;
    }
    elseif( $x ==2) {
        return 1;
    }
    else  {
        $licznik =3;
        while($licznik <= $x)
        {
            $rezultat = $pierwszy + $drugi;
            $pierwszy = $drugi;
            $drugi = $rezultat;
            $licznik = $licznik + 1;
        }
        return $rezultat;
    }
}

$i=19;

echo($i.' elementem ciagu Fibonacciego obliczonego nierekurencyjnie jest '.fib($i));

?>





