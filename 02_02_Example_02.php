<?php
/**
 * Created Lebedev Vitaly
 * Email: eslovo@gmail.com
 * Date: 03.06.2019
 * Time: 0:32
 */


declare(strict_types =1);

function sum(int $a, int $b){
    echo $a .' '. gettype($a). ' + ';
    echo $b .' '. gettype($b). ' + ';
    $result = $a + $b;
    echo $result .' '. gettype($result);
}

sum(2,3); echo '<br/>';
sum("2", "3"); echo '<br/>';
sum(2.0, 3.0); echo '<br/>';
echo '<hr>';