<?php

use Tupi;

/*
|--------------------------------------------------------------------------
| Common Functions
|--------------------------------------------------------------------------
|
| Several application-wide utility methods.
|
*/

require_once __DIR__.'/../src/Common.php';

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| Create a new application instance.
|
*/

$app = new Tupi\Application(APP_PATH);

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance.
|
*/

return $app;
