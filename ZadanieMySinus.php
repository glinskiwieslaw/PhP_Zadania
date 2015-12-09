<?php
/**
 * Created by PhpStorm.
 * User: X230 Tablet
 * Date: 2015-12-02
 * Time: 22:46
 */

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

function silnia($arg1) {
    $wynik=1;
    for ($i=1; $i< $arg1; $i=$i+1) {
        $wynik=$wynik *($i+1);
    }
    return $wynik;
}


function mySinus($x, $iterNum) {
   $wynik=$x;
    $ulamek=$x;
    $licznik=0;
    $dzielnik=0;
    $j=0;
    echo 'x = ' . $x . ' <br> Liczba iteracji = ' . $iterNum . '<br> <hr><hr>';
    while ($licznik< $iterNum ) {
           $j=$j+1;
           if ($j % 2!=0 && $j!=1) {
               $licznik=$licznik+1;
               echo '<hr> licznik ' . $licznik. '<br>';
               /*  $dzielnik=potega($x,$i)/silnia($i);*/
/*               echo 'Dzielnik '. $dzielnik . '<br>';*/
               if ($licznik % 2!=0) {
                   echo $licznik . '  Wynik z minusem <br>';
                   echo  $x . 'do potęgi ' . $j. 'równa się' . potega($x,$j) .'<br>';
                   echo  $j .'!' . ' rowna się ' . silnia($j).'<br>';
                   $ulamek=potega($x,$j)/silnia($j);
                   echo $licznik. '<b>  ułamek = '. $ulamek . '</b><br>';
                   $wynik=$wynik-$ulamek;
                   echo $x . ' do potegi ' . $j . 'ej / ' . $j . '! ='. '<i>'. $wynik . '</i><br>';
               }
               else  {
/*                   $wynik=$wynik+$dzielnik;*/
                   echo $licznik . '  Wynik z plusem <br>';
                   echo $x .  'do potęgi' .$j .  'ej / ' . $j . '! <br>';
                   echo  $x . 'do potęgi ' . $j. 'równa się' . potega($x,$j) .'<br>';
                   echo  $j .'!' . 'rowna się ' . silnia($j).'<br>';
                   $ulamek=potega($x,$j)/silnia($j);
                   echo $licznik. '<b>   ułamek = '. $ulamek . '</b><br>';
                   $wynik=$wynik+$ulamek;
                   echo $x . ' do potegi ' . $j . ' ej / ' . $j . '! ='. '<i>'. $wynik . '</i><br>';
               }
           }
   }
   return $wynik;
}

echo mySinus(4,4);

