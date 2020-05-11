<?php

namespace Core;

class Application
{
    /**
     * App startup time.
     *
     * @var mixed
     */
    protected $startTime;

    /**
     * The base path.
     *
     * @var string
     */
    protected $basePath;

    /**
     * The config
     *
     * @var string
     */
    protected $config;

    /**
     * Create a new application instance.
     *
     * @param  string|null  $basePath
     * @return void
     */
    public function __construct($basePath = null)
    {
        $this->startTime = microtime(true);

        if ($basePath) {
            $this->setBasePath($basePath);
        }
    }

    /**
     * Set the base path for the application.
     *
     * @param  string  $basePath
     * @return $this
     */
    public function setBasePath($basePath)
    {
        $this->basePath = rtrim($basePath, '\/');
        return $this;
    }

    /**
     * Handles some basic app and environment setup.
     */
    public function run()
    {
        debug("init app");
    }
}