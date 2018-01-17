<?php
//Require the autoload file

ini_set ("display_errors", 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//define a default route
$f3->route('GET /', function()
{
    $view =  new View
    echo $view->render
    ('views/home.html');
}
);

//Run fat free
$f3->run();