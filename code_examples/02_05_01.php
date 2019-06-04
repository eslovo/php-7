<?php
/**
 * Created by Vitaly Lebedev
 * Email: eslovo@gmail.com
 * Date: 04.06.2019
 * Time: 11:09
 */

// Usign Coalescing Operator: ??

echo $page_title ?? 'My Page Title';

$username = $_POST['username'] ?? 'guest';

$value = $a ?? $b ?? $c ?? $d ?? $default;