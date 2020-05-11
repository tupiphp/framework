<?php

namespace Core\Routings;

class Router
{
    protected $httpProtocol;
    protected $uri;
    protected $action;

    /**
     * Route constructor.
     * @param array $routes
     */
    public function __construct(RouterBuilder $routerBuilder)
    {
        $this->httpProtocol = $routerBuilder->httpProtocol;
        $this->uri = $routerBuilder->uri;
        $this->action = $routerBuilder->action;
    }
}