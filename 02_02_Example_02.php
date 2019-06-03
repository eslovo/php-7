<?php
/**
 * Created by Lebedev Vitaly
 * Email: eslovo@gmail.com
 * Date: 03.06.2019
 * Time: 0:32
 */

/**
 * Setting strict_types
 */
declare(strict_types =1);


/**
 * With strict_types set this will result in a Fatal Error
 * due to incorrect type of params given
 *
 * @param int $a
 * @param int $b
 */
function sum(int $a, int $b){
    echo $a .' '. gettype($a). ' + ';
    echo $b .' '. gettype($b). ' + ';
    $result = $a + $b;
    echo $result .' '. gettype($result);
}

sum2(2,3); echo '<br/>';
sum2("2", "3"); echo '<br/>';
sum2(2.0, 3.0); echo '<br/>';