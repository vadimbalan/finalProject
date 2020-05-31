<?php

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once('vendor/autoload.php');
require_once("model/data-layer.php");
require_once("model/validate.php");

// Start a session AFTER requiring autoload.php
session_start();

// Instantiate the F3 Base Class
$f3 = Base::instance();

// Default route
$f3->route('GET /', function () {

    $view = new Template();
    echo $view->render('views/home.html');
});

// Basic information page
$f3->route('GET|POST /information', function ($f3) {

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        //array(4) { ["fName"]=> string(0) "" ["lName"]=> string(0) "" ["phone"]=> string(0) "" ["email"]=> string(0) "" }
        //var_dump($_POST);

        // Validate first name
        if (!validName($_POST['fName']))
        {
            //Set an error variable in the F3 hive
            $f3->set('errors["fName"]', "Invalid first name");
        }
        // Validate last name
        if (!validName($_POST['lName']))
        {
            //Set an error variable in the F3 hive
            $f3->set('errors["lName"]', "Invalid last name");
        }
        // Validate phone number
        if (!validPhone($_POST['phone']))
        {
            //Set an error variable in the F3 hive
            $f3->set('errors["phone"]', "Invalid phone number");
        }
        // Validate email address
        if (!validEmail($_POST['email']))
        {
            //Set an error variable in the F3 hive
            $f3->set('errors["email"]', "Invalid email");
        }
        // Data is valid
        if (empty($f3->get('errors')))
        {
            //Store the data in the session array
            $_SESSION['fName'] = $_POST['fName'];
            $_SESSION['lName'] = $_POST['lName'];
            $_SESSION['phone'] = $_POST['phone'];
            $_SESSION['email'] = $_POST['email'];

            // Reroute to the next page
            $f3->reroute('car');
        }

    }

    $view = new Template();
    echo $view->render('views/information.html');
});

// Basic information about car page
$f3->route('GET|POST /car', function ($f3) {

    //If the form has been submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        //Store the data in the session array
        $_SESSION['model'] = $_POST['makeDrop'];
        $_SESSION['year'] = $_POST['yearDrop'];
        $_SESSION['wheel'] = $_POST['driveTrain'];

        //Redirect to exterior page
        $f3->reroute('exterior');
    }

    $f3->set('models', getModel());
    $f3->set('years', getYear());
    $f3->set('wheels', getWheel());

    $view = new Template();
    echo $view->render('views/car.html');
});

// Information about exterior of car
$f3->route('GET|POST /exterior', function ($f3) {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        //Store the data in the session array
        $_SESSION['rim'] = $_POST['rimDrop'];
        $_SESSION['spinner'] = $_POST['spinners'];
        $_SESSION['color'] = $_POST['colorCar'];
        $_SESSION['exhaust'] = $_POST['exhaust'];
        $_SESSION['engine'] = $_POST['engine'];
        $_SESSION['transmission'] = $_POST['transmission'];

        $f3->reroute('interior');
    }

    $f3->set('rims', getRim());
    $f3->set('spinners', getSpinner());
    $f3->set('colors', getColor());
    $f3->set('exhausts', getExhaust());
    $f3->set('engines', getEngine());
    $f3->set('transmissions', getTransmission());

    $view = new Template();
    echo $view->render('views/exterior.html');
});

// Information about interior of car
$f3->route('GET|POST /interior', function ($f3) {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        //Store the data in the session array
        $_SESSION['leather'] = $_POST['leather'];
        $_SESSION['seat'] = $_POST['seats'];
        $_SESSION['stereo'] = $_POST['stereo'];
        $_SESSION['navigation'] = $_POST['nav'];
        $_SESSION['headsUp'] = $_POST['head'];

        $f3->reroute('summary');
    }

    $f3->set('leathers', getLeather());
    $f3->set('seats', getSeat());
    $f3->set('stereos', getStereo());
    $f3->set('navigations', getNavigation());
    $f3->set('headsUps', getHeadsUp());

    $view = new Template();
    echo $view->render('views/interior.html');
});

// Summary page of the final product
$f3->route('GET /summary', function () {

    $view = new Template();
    echo $view->render('views/summary.html');

    session_destroy();
});


// Run F3
$f3->run();
