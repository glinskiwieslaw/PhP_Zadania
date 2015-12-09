<?php
/**
 * Created by PhpStorm.
 * User: wg
 * Date: 2015-11-28
 * Time: 15:28
 */
/*Napisz funkcję, która wyświetli te
liczby w tablicy które są mniejsze od
średniej arytmetycznej wszystkich
liczb w tablicy*/

function wyswietlLiczbyMniejszeOdSrednie($tablica) {
$sumaTablicy=0;
    for ($i=0; $i< count($tablica); $i=$i+1){
    $sumaTablicy=$sumaTablicy+$tablica[$i];
    }
    $sredniaTablicy=$sumaTablicy/count($tablica);
echo ("Srednia tablicy: $sredniaTablicy");
    echo "<br>";
    echo "liczby mniejsze od sredniej: <br>";

    for ($i=0; $i< count($tablica); $i=$i+1) {
        if ($tablica[$i] < $sredniaTablicy) {
            echo $tablica[$i];
            echo "<br>";
        }
    }

}

/*$tablica=array(12,22,4,5,67,232,5555,67755);*/
wyswietlLiczbyMniejszeOdSrednie(array(33,34445,5555,6778,889,9,8));