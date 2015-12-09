<?php
/**
 * Created by PhpStorm.
 * User: wg
 * Date: 2015-11-20
 * Time: 01:10
 */
/*Napisz program który na podstawie wartości zmiennej $n
będzie rysował następujący schemat
(tutaj dla $n = 5):*/

/*  123454321
    1234 4321
    123   321
    12     21
    1       1
    123454321
*/

$n=5;
for($i=0; $i<=$n; $i = $i+1) {
    for ($j = 1; $j <= $n - $i; $j = $j + 1) {
        echo($j);
    }

    for($m=$j; $m<=$n; $m=$m+1){
       if ($i!=5) {
        echo("&nbsp;");
       }
    }

    for($k=1; $k<=$i-1; $k=$k+1) {
        if ($i!=5) {
            echo("&nbsp;");
        }
    }

    for($o=$n-$i; $o>=1; $o=$o-1){
        if ($o!=5) {
            echo("$o");
        }
    }

    if ($i<>5) {
        echo("<br>");
    }
}

for ($w = 1; $w < $n; $w = $w + 1) {
    echo($w);
}

for($r=$n; $w>=1; $w=$w-1){
         echo("$w");
    }
?>