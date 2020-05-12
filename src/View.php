<?php

namespace Tupi;

class View
{
    public static function make($view = null, $data = [])
    {
        echo $view . '.php';
    }
}