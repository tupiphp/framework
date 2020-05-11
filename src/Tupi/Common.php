<?php

namespace Core;

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

/*
|--------------------------------------------------------------------------
| Config Instances
|--------------------------------------------------------------------------
|
| Getting config instances.
|
*/

if (! function_exists('config'))
{
    /**
     * @param string $name
     * @return mixed
     */
    function config(string $name)
    {
        return Config::get($name);
    }
}

/*
|--------------------------------------------------------------------------
| Debug
|--------------------------------------------------------------------------
|
| Prints a debug report and exits.
|
*/

if (! function_exists('debug'))
{
    /**
     * @param array ...$vars
     */
    function debug(...$vars)
    {
        echo '<pre>';
        print_r($vars);
        echo  '</pre>';
        exit;
    }
}
