<?php
/**
 * Created by PhpStorm.
 * User: wg
 * Date: 2015-11-24
 * Time: 13:49
 */
/*Zadanie 12. Napisz program który napisze tabliczkę mnożenia dla podanej zmiennej $n. Np., dla $n = 3 wynik będzie wyglądać następująco:
1 x 1 = 1
1 x 2 = 2
1 x 3 = 3
2 x 1 = 2
2 x 2 = 4
2 x 3 = 6
3 x 1 = 3
3 x 2 = 6
3 x 3 = 9
Do mnożenia liczb użyj operatora *, do stworzenia tabelki użyj kodu HTML.*/
?>
<html>
    <head>
    </head>
    <body>
        <table border=1 align="center" style='width:40%'>
            <?php
            $n=3;
            for ($i=1; $i<=$n; $i=$i+1){
                echo("<tr>");
                for ($j=1; $j<=3; $j=$j+1) {
                    echo("<td>");
                    echo($i .'x'. $j.'=');
                    echo($i * $j);
                    echo("</td>");
                    }
                echo("</tr>");
            }
            ?>
        </table>
    </body>
</html>