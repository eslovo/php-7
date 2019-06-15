<?php
/**
 * Created by Vitaly Lebedev
 * Email: eslovo@gmail.com
 * Date: 14.06.2019
 * Time: 17:14
 */


  ob_start(); // turn on output buffering

  // Define constants
  define('CAMT_XML_UPLOAD_DIR', __DIR__.'/upload/xml');

  // -> All classes in directory
  foreach(glob('class/*.php') as $file) {
    require_once($file);
  }

  // Autoload class definitions
  function my_autoload($class) {
    if(preg_match('/\A\w+\Z/', $class)) {
      include('class/' . $class . '.php');
    }
  }
  spl_autoload_register('my_autoload');