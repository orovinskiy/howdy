<?php
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

$f3 = Base::instance();

$f3->route('GET /', function(){
    echo "<p>Hello WOrld</p>";
});

$f3->run();
