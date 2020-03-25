<?php

/**
 * Shifted 3 Content Management System
 *
 * First and foremost thanks for giving our software a chance to show off what it can and likely can't do.
 * We didn't make this because we thought we could do it better (albeit we do hope we can improve some things).
 * We made this because we all need something new, something fresh, something to look forward too.
 *
 * We are not the same! We are different! WE ARE DEFIANT!
 *
 */

define('ROOT', dirname(__DIR__));
define('APP_ROOT', ROOT . '/app/');

// Autoload
require_once ROOT . '/vendor/autoload.php';

session_start();

// Slim Framework Settings
$settings = include_once ROOT . '/src/settings.php';
$app      = new \S3\App($settings);

// S3 Framework Dependencies
require_once ROOT . '/src/dependencies.php';

// S3 Framework Routes
require_once ROOT . '/src/routes.php';

// Application Loader
$dirs = array_map('basename', glob(APP_ROOT . "/*", GLOB_ONLYDIR));
//print_r($dirs);
foreach ($dirs as $dir) {
    $file = APP_ROOT . "/" . $dir . "/settings.php";
    if (file_exists($file)) {
        include_once $file;
    }
}

// Run
$app->run();
