<!--
    Peter Eang
    04/24/2021
    https://peang.greenriverdev.com/328/dating/
    The controller page for the dating website
-->
<?php

// this is my controller for the dating website

// turn on error-reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// start a session
session_start();

// require autoload file
require_once ('vendor/autoload.php');

// instantiate fat-free
$f3 = Base::instance();

// define default route
$f3->route('GET /', function (){

   // display the home page
    $view = new Template();
    echo $view->render('views/home.html');
});

$f3->route('GET|POST /profile1', function ()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $_SESSION['fname'] = $_POST['fname'];
        $_SESSION['lname'] = $_POST['lname'];
        $_SESSION['age'] = $_POST['age'];
        $_SESSION['gender'] = $_POST['gender'];
        $_SESSION['phone'] = $_POST['phone'];

        header('location: profile2');
    }

    //display the personal information page
    $view = new Template();
    echo $view->render('views/personalinfo.html');
}
);

$f3->route('GET|POST /profile2', function ()
{

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['states'] = $_POST['states'];
        $_SESSION['seeking'] = $_POST['seeking'];
        $_SESSION['bio'] = $_POST['bio'];
        // Data validation will go here

        header('location: profile3');
    }

    // display the lunch page
    $view = new Template();
    echo $view->render('views/profilepage.html');
});

$f3->route('GET|POST /profile3', function ()
{

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $_SESSION['indoorint'] = implode(", ", $_POST['indoorint']);
        $_SESSION['outdoorint'] = implode(", ", $_POST['outdoorint']);
        header('location: summary');
    }

    // display the interests page
    $view = new Template();
    echo $view->render('views/interests.html');
});

$f3->route('GET /summary', function ()
{
    //display the summary page
    $view = new Template();
    echo $view->render('views/summary.html');
});



// run fat-free
$f3->run();
