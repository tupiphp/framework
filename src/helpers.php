<?php

use Tupi\View;
use Tupi\Paths;

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
        // if (func_num_args() === 0) {
        //     return;
        // }

        // $view = Paths::VIEW_DIR . $view . ".php";

        // echo $view;die();

        // if (file_exists($view)) {
            return [
                'uri'   => $view,
                'data'  => $data
            ];
        // }

        // return;
    }
}

/*
|--------------------------------------------------------------------------
| Debug console browser
|--------------------------------------------------------------------------
|
| Debug console browser.
|
*/

if (! function_exists('console_log'))
{
    function console_log($data)
    {       
        if (is_array($data))
            $data = implode(',', $data);

        echo "<script>console.log('TupiPHP Debug Objects: " . $data . "' );</script>";
    }
}