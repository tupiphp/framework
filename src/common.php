<?php

/*
|--------------------------------------------------------------------------
| Application Directory
|--------------------------------------------------------------------------
|
| The path to the application directory.
|
*/

if (! defined('APP_PATH'))
{
    define('APP_PATH', realpath(dirname(__DIR__)) . DIRECTORY_SEPARATOR);
}

/*
|--------------------------------------------------------------------------
| Project Root Directory
|--------------------------------------------------------------------------
|
| The path to the project root directory. Just above APP_PATH.
|
*/

if (! defined('ROOT_PATH'))
{
    define('ROOT_PATH', realpath(APP_PATH . '../') . DIRECTORY_SEPARATOR);
}