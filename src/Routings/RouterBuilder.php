<?php

namespace Tupi\Routings;

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

    public function equals($anotherObj) {
        if ($anotherObj == null) {
            return false;
        }

        if ($this != $anotherObj) {
            return false;
        }

        if($this->httpProtocol !== $anotherObj->httpProtocol) {
            return false;
        }

        if($this->uri !== $anotherObj->uri) {
            return false;
        }

        if($this->action !== $anotherObj->action) {
            return false;
        }

        return true;
    }
}