<?php
/**
 * Created by PhpStorm.
 * User: X230 Tablet
 * Date: 2015-12-02
 * Time: 13:50
 */
/*Zadanie 17. Napisz funkcję sprawdzającą czy podana liczba jest liczbą pierwszą
(jest podzielna tylko przez 1 i samą siebie).
Żeby dostać resztę z dzielenia użyj operatora %, np.: 12 % 5 = 2*/

?>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<?php

function liczbaPodzielna($arg1)
{
    $liczbaPodz=0;
    for ($i = 2; $i < $arg1; $i = $i + 1) {
        if ($arg1 % $i == 0) {
            $liczbaPodz=1;
            return True;
        }
    }
    return False;
}

function liczbaPierwsza($arg)
{
    if (liczbaPodzielna($arg) == True) {
        return False;
    }
    else {
        return True;
    }
}


$liczba=96;


if (liczbaPierwsza($liczba) == True){
    echo $liczba . ' jest liczbą pierwszą';
}
else {
    echo $liczba . ' nie jest liczbą pierwszą';
}
