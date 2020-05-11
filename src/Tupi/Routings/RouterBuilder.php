<?php

namespace Core\Routings;

class RouterBuilder
{
    public $httpProtocol;
    public $uri;
    public $action;

    public function setHttpProtocol ($httpProtocol) {
        $this->httpProtocol = $httpProtocol;
        return $this;
    }

    public function setURI ($uri) {
        $this->uri = $uri;
        return $this;
    }

    public function setActions ($action) {
        $this->action = $action;
        return $this;
    }

    public function build () {
        return new Router($this);
    }
}