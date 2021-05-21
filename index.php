<?php

// this is my controller for the dating website

// turn on error-reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// start a session
session_start();

//require autoload file
require_once ('vendor/autoload.php');
require_once ('model/data-layer.php');
require_once ('model/validation.php');

// instantiate fat-free
$f3 = Base::instance();

// define default route
$f3->route('GET /', function (){

   // display the home page
    $view = new Template();
    echo $view->render('views/home.html');
});

$f3->route('GET|POST /profile1', function ($f3)
{

    //Reinitialize a session array
    $_SESSION = array();

    //Initialize variables to store user input
    $userName = "";
    // $userNameL = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $userName = $_POST['name'];
        // $userNameL = $_POST['lname'];

        //if name is valid store data
        if (validName($_POST['name'])) {
            $_SESSION['name'] = $userName;
        }
        //set an error if not valid
        else {
            $f3->set('errors["name"]', 'Please enter a valid name');
        }

        $_SESSION['fname'] = $_POST['fname'];
        $_SESSION['lname'] = $_POST['lname'];
        $_SESSION['age'] = $_POST['age'];
        $_SESSION['gender'] = $_POST['gender'];
        $_SESSION['phone'] = $_POST['phone'];

        if (empty($f3->get('errors'))) {
            header('location: profile2');
        }
    }

    //store the user input to the hive
    $f3->set('userName', $userName);

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

        header('location: profile3');
    }

    // display the profile page
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
