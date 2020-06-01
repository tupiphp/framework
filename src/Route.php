<?php

namespace Tupi;

use BadMethodCallException;
use Tupi\Routings\RouterBuilder;
use Tupi\PHP\Lang\Comparable;

class Route
{
    public static $routes = [];

    /**
     * Register a new GET route with the router.
     *
     * @param string $uri
     * @param array|string|null $action
     * @return \Core\Routing\Route
     */
    public static function get($uri, $action)
    {
        debug($action);

        //return self::addRoute('GET', $uri, $action);
    }

    /**
     * Register a new POST route with the router.
     *
     * @param  string  $uri
     * @param  array|string|null  $action
     * @return \Core\Routing\Route
     */
    public static function post($uri, $action = null)
    {
        return self::addRoute('POST', $uri, $action);
    }

    /**
     * Register a new PUT route with the router.
     *
     * @param  string  $uri
     * @param  array|string|null  $action
     * @return \Core\Routing\Route
     */
    public static function put($uri, $action = null)
    {
        return self::addRoute('PUT', $uri, $action);
    }

    /**
     * Register a new DELETE route with the router.
     *
     * @param  string  $uri
     * @param  array|string|null  $action
     * @return \Core\Routing\Route
     */
    public static function delete($uri, $action = null)
    {
        return self::addRoute('DELETE', $uri, $action);
    }

     /**
      * Add a route to the underlying route collection.
      *
      * @param  array|string  $methods
      * @param  string  $uri
      * @param  array|string|null  $action
      * @return \Core\Routing\Route
      */
     private static function addRoute($httpProtocol, $uri, $action)
     {
         if(! is_null($uri) && $uri == "/") {
             return;
         }

         if($action != null) {
             $action = trim($action, "/");
         }

        return self::createRoute($httpProtocol, $uri, $action);
     }

    /**
     * @param string $methods
     * @param string $uri
     * @param array|null $action
     */
    private static function createRoute($httpProtocol, $uri, $action)
    {


        if(self::isRouteValid($uri)) {
            echo $uri;
        } else {
            echo "dd";
        }
    }

    /**
     * @param $uri
     * @return bool
     */
    public static function isExistRoute($uri) {
        if (! in_array(explode('/', $uri)[0], self::routes)) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * @param $method
     * @param $parameters
     */
    public static function __callStatic($method, $parameters)
    {
        throw new BadMethodCallException(sprintf(
            'Method %s::%s does not exist.', static::class, $method
        ));
    }
}