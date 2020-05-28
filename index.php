<?php

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once("vendor/autoload.php");

// Start a session AFTER requiring autoload.php
session_start();

// Instantiate the F3 Base Class
$f3 = Base::instance();

// Default route
$f3->route('GET /', function ()
{

    $view = new Template();
    echo $view->render('views/home.html');
});

// Basic information page
$f3->route('GET|POST /information', function ($f3)
{
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $f3->reroute('/car');
    }

    $view = new Template();
    echo $view->render('views/information.html');
});

// Basic information page
$f3->route('GET|POST /car', function ()
{

    $view = new Template();
    echo $view->render('views/car.html');
});

// Run F3
$f3->run();
