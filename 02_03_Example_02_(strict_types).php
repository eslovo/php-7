<?php
/**
 * Created by Vitaly Lebedev
 * Email: eslovo@gmail.com
 * Date: 03.06.2019
 * Time: 20:06
 */


declare(strict_types=1);

/*
 * Strict Type Declaration
 * (return value gets coerced by PHP to INTEGER
 */
function sum($a, $b): int {
    return $a+$b;
}
echo gettype(sum(2, 3)); // integer
echo gettype(sum("2", "3")); // TypeError: Return value of sum() must be of the type int, float returned
echo gettype(sum(2.0, 3.0)); // TypeError: Return value of sum() must be of the type int, float returned