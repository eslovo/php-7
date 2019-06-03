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

// sort array by price, in ascending order
function sort_by_price($watch1, $watch2)
{
    return $watch1['price'] <=> $watch2['price'];
}

usort($watches, 'sort_by_price');

print_r($watches);