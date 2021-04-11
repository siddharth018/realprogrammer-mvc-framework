<?php

/**
 * Home controller
 *
 */

/**
 * Composer
 */
require dirname(__DIR__) . '/vendor/autoload.php';


/**
 * Error and Exception handling
 */
error_reporting(E_ALL);
set_error_handler('System\Error::errorHandler');
set_exception_handler('System\Error::exceptionHandler');

require dirname(__DIR__) . '/config/web.php';
