<?php
/**
 * Created by PhpStorm.
 * User: X230 Tablet
 * Date: 2015-12-02
 * Time: 12:49
 */
/*Zadanie 16. Napisać funkcję,
która pobiera liczbę $a i $n jako argument
i zwraca jako wynik $a do potęgi $n.*/
?>

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

<?php

function potega($arg1,$arg2) {
$wynik=$arg1;
    for ($i=2; $i<=$arg2; $i=$i+1) {
        $wynik=$wynik*$arg1;
    }
     return $wynik;
}

$liczba1=4;
$liczba2=8;
echo $liczba1.' do potęgi ' .$liczba2.'-ej równa się:' . potega($liczba1,$liczba2);
