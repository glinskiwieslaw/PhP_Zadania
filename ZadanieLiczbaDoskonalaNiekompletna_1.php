<?php
/**
 * Created by PhpStorm.
 * User: X230 Tablet
 * Date: 2015-12-04
 * Time: 01:43
 */
?>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<?php

function liczbaDoskonalaNiekompletna($n)
{
    $dzielnik = 0;
    for ($i = 1; $i < $n; $i = $i + 1) {
        if ($n % $i == 0) {
            $dzielnik = $dzielnik + $i;
        }
    }
    if ($dzielnik == $n) {
        return True;
    }
    elseif ($dzielnik < $n) {
        return  False;
    }
}


$k= 128;
$liczba=0;
while ($liczba<$k) {
    $liczba++;
    if (liczbaDoskonalaNiekompletna($liczba) == True) {
        echo '<font color="red">'. $liczba .' jest liczbą doskonałą <br> </font>';
    }
    elseif (liczbaDoskonalaNiekompletna($liczba)== False) {
        echo $liczba .' jest liczbą Niekompletną <br>';
    }
}
