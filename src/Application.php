<?php

namespace Tupi;

class  Application
{
    /**
     * The TupiPHP framework version.
     *
     * @var string
     */
    public const VERSION = '1.0.0 (LTS)';

    /**
     * Create a new application instance.
     *
     * @param  string|null  $basePath
     * @return void
     */
    protected $basePath;

    /**
     * App startup time.
     *
     * @var mixed
     */
    protected $startTime;


    public function __construct($basePath = null)
    {
        date_default_timezone_set('UTC');

        $this->startTime = microtime(true);       

        if ($basePath) {
            $this->setBasePath($basePath);
        }

        $this->loadingRoutes();
         
    }

    /**
     * Get the version number of the application.
     *
     * @return string
     */
    public function version()
    {
        return static::VERSION;
    }

    /**
     * Set the base path for the application.
     *
     * @param  string  $basePath
     * @return $this
     */
    public function setBasePath($basePath)
    {
        $this->basePath = $basePath;
    }

    /**
     * Get the base path for the application.
     *
     * @return $this
     */
    public function getBasePath()
    {
        return $this->basePath;
    }

    /**
    * Responsible for loading the route file.
    */
    public function loadingRoutes()
    {

       $routeWeb = $this->getBasePath() . Paths::ROUTES_DIR . DIRECTORY_SEPARATOR . NAME_FILE_ROUTE_WEB;
       $routeAPI = $this->getBasePath() . Paths::ROUTES_DIR . DIRECTORY_SEPARATOR . NAME_FILE_ROUTE_API;

       if (! file_exists($routeWeb)) {
            die("File does not exist: " . $routeWeb);
       }

       if (! file_exists($routeAPI)) {
            die("File does not exist: " . $routeAPI); 
       }

       require_once $routeWeb;
       require_once $routeAPI;
    }
    
    /**
     * Handles some basic app and environment setup.
     */
    public function run()
    {
        console_log("Starting tupiPHP framework " . date("Y-m-d H:i:s"));
    }
}