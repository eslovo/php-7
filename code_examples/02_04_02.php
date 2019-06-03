<?php
/**
 * Created by Vitaly Lebedev
 * Email: eslovo@gmail.com
 * Date: 03.06.2019
 * Time: 22:31
 */

$watches = array(
    array('brand' => 'Swatch', 'price' => 50.0),
    array('brand' => 'Timex', 'price' => 5.0),
    array('brand' => 'Rolex', 'price' => 500.0)
);

// sort array by price, in DESCending order
usort($watches, function ($a, $b) {
    return $b['price'] <=> $a['price'];
});

print_r($watches);