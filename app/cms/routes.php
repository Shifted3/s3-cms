<?php

/**
 * Shifted 3 Content Management System.
 *
 * File Description:
 * Route declarations for the CMS.
 *
 * WARNING::  Unless you know what you are doing; we do not recommend changing these settings.
 * Buyer beware; you have been warned!
 *
 */

use App\CMS\Controllers\HomeController;

// Index
$app->get(
    '/',
    [HomeController::class, 'index']
);
