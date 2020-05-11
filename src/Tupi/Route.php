<?php

namespace Tupi;

use BadMethodCallException;
use Tupi\Routings\RouterBuilder;

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
    public static function get($uri, $action = null)
    {
        return self::addRoute('GET', $uri, $action);
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
         $action = trim($action, '/');
         $routes[$action] = $callback;
        return self::createRoute($httpProtocol, $uri, $action);
     }

    /**
     * @param string $methods
     * @param string $uri
     * @param array|null $action
     */
    private static function createRoute($httpProtocol, $uri, $action)
    {
        return (new RouterBuilder())
            ->setHttpProtocol($httpProtocol)
            ->setURI($uri)
            ->setActions($action)
            ->build();
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