<?php
// Starting Session.
session_start();

// Setting error values to test the script
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// DEFINES VARS
DEFINE ("rootdir",getcwd());
const includes = rootdir . "/includes/";

// Global Vars
global $template;
global $mysqli;
global $newsarr;
global $page;
global $adminLevel;
global $temppage;

// Setting Nul-vars to required indexes



// Pre-required Includes
require "config.php";
require includes."includes.php";








// Post-required Includes
require includes."template.php";


print $template;


?>