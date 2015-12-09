<?php
/**
 * Created by PhpStorm.
 * User: wg
 * Date: 2015-11-24
 * Time: 13:49
 */

/*Zadanie 13. Napisz program który będzie obliczał wartość liczby Pi używając następującej formuły:
Zobacz jak zmienia się precyzja wyniku w zależności od ilości iteracji.*/

?>
   <?php
    $n=1000;
    $wynik=1;
    $pi=0;
    $licznik=0;
    for ($i=1; $i<=$n; $i=$i+1){
        if ($i % 2!=0 && $i!=1) {
            $licznik=$licznik+1;
            $dzielnik=1/$i;
            if ($licznik % 2!=0) {
                $wynik=$wynik-$dzielnik;
        }
            else  {
                $wynik=$wynik+$dzielnik;
            }
        }
    }
$pi=$wynik*4;
echo ("Liczba iteracji = $n <br>");
echo ("pi = $pi");
?>
