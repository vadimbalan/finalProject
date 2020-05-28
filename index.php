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
$f3->route('GET /', function () {

    $view = new Template();
    echo $view->render('views/home.html');
});

// Basic information page
$f3->route('GET /information', function () {

    $view = new Template();
    echo $view->render('views/information.html');
});

// Run F3
$f3->run();
