<?php

// this is my controller for the dating website

// turn on error-reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require autoload file
require_once ('vendor/autoload.php');

// start a session AFTER the autoload
session_start();

// instantiate Fat-Free and controller
$f3 = Base::instance();
$con = new Controller($f3);

// define default route
$f3->route('GET /', function (){

   $GLOBALS['con']->home();
});

$f3->route('GET|POST /profile1', function ($f3)
{
    $GLOBALS['con']->profile1();
});

$f3->route('GET|POST /profile2', function ($f3)
{
    $GLOBALS['con']->profile2();
});

$f3->route('GET|POST /profile3', function ($f3)
{
    $GLOBALS['con']->profile3();
});

$f3->route('GET /summary', function ()
{
    //display the summary page
    $view = new Template();
    echo $view->render('views/summary.html');
});



// run fat-free
$f3->run();
