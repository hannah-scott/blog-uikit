<?php
    if (!defined("__CONFIG__")) {
        exit("404");
    }

    // Sessions are always turned on
    if (!isset($_SESSION)) {
        session_start();
    }
    
    // Error logging
    // error_reporting(-1);
    // ini_set('display_errors','On');

    include_once "classes/Filter.php";
    include_once "functions.php";

    // Global Settings
    // Files
    $GLOBALS["fileext"] = ".php"; // File extension of files in assets/content
?>
