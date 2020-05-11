<?php

namespace Tupi;

class Config
{
    /**
     * Cache for instance of any configurations that
     * have been requested as "shared" instance.
     *
     * @var array
     */
    static private $instances = [];

    /**
     * Create new configuration instances or return
     * a shared instance
     *
     * @param string  $name      Configuration name
     * @return mixed|null
     */
    public static function get(string $name)
    {
        $class = $name;
        if (($pos = strrpos($name, '\\')) !== false)
        {
            $class = substr($name, $pos + 1);
        }

        if (! isset( self::$instances[$class] ))
        {
            self::$instances[$class] = new $name;
        }

        return self::$instances[$class];
    }
}