<?php
/**
 * Created by PhpStorm.
 * User: wg
 * Date: 2015-11-14
 * Time: 16:17
 * Zadanie 10. Napisz program który na podstawie wartości zmiennej $n będzie rysował następujący schemat (tutaj dla $n = 5):
 * 2 3 4 5
 * * 3 4 5
 * * * 4 5
 * * * * 5
 * * * * *
 * * * * *
 * * * * 5
 * * * 4 5
 * * 3 4 5
 * 2 3 4 5
 */


$n=5;

for($i=1; $i<=$n; $i = $i+1) {


    for($j=1; $j<=$i; $j=$j+1){
        echo("*");
    }
    for($k=$j; $k<=$n; $k=$k+1){
        echo("$k");
    }



    echo("<br>");
}



for($i=1; $i<=$n; $i = $i+1) {


    for($j=$n; $j>=$i; $j=$j-1){
        echo("*");
    }

    for($k=$n-$j+1; $k<=5; $k=$k+1) {
        echo($k);
    }



    echo("<br>");
}




