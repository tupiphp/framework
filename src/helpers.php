<?php

use Tupi\View;

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

/*
|--------------------------------------------------------------------------
| Config Instances
|--------------------------------------------------------------------------
|
| Getting config instances.
|
*/

if (! function_exists('view'))
{
    /**
     * @param string $name
     * @return mixed
     */
    function view($view = null, $data = [])
    {
        View::make($view, $data);
    }
}

