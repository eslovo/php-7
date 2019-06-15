<?php
/**
 * Created by Vitaly Lebedev
 * Email: eslovo@gmail.com
 * Date: 14.06.2019
 * Time: 17:17
 */

require_once "init.php";


$test =new test\test\Test;
$test->upload_dir = CAMT_XML_UPLOAD_DIR;
$output =$test->bar(__FILE__);
echo $output;