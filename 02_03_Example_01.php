<?php
/**
 * Created by Vitaly Lebedev
 * Email: eslovo@gmail.com
 * Date: 03.06.2019
 * Time: 15:25
 */


/*
 *  Old way with no Return Type Declaration
 */
function sum($a, $b){
    return $a+$b;
}

echo gettype(sum(2, 3)); // integer
echo gettype(sum("2", "3")); // integer - 'cos math operation cannot be on string and PHP7 converts from string to integer
echo gettype(sum(2.0, 3.0)); // double (float)

echo '<br/><hr/><br/>';

/*
 * Coercive Type Declaration
 * (return value gets coerced by PHP to INTEGER
 */

function sum2($a, $b): int {
    return $a+$b;
}
echo gettype(sum2(2, 3)); // integer
echo gettype(sum2("2", "3")); // integer
echo gettype(sum2(2.0, 3.0)); // integer