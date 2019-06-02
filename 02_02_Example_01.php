<?php
/**
 * Created by Lebedev Vitaly
 * Email: eslovo@gmail.com
 * Date: 03.06.2019
 * Time: 0:32
 */


// old way w. no type declaration in function params

function sum($a, $b){
    echo $a .' '. gettype($a). ' + ';
    echo $b .' '. gettype($b). ' + ';
    $result = $a + $b;
    echo $result .' '. gettype($result);
}

sum(2,3); echo '<br/>';
sum("2", "3"); echo '<br/>';
sum(2.0, 3.0); echo '<br/>';
echo '<hr>';


// type declaration which converts given params to expected types

function sum2(int $a, int $b){
    echo $a .' '. gettype($a). ' + ';
    echo $b .' '. gettype($b). ' + ';
    $result = $a + $b;
    echo $result .' '. gettype($result);
}

sum2(2,3); echo '<br/>';
sum2("2", "3"); echo '<br/>';
sum2(2.0, 3.0); echo '<br/>';
echo '<hr>';
