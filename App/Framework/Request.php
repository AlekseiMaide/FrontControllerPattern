<?php

class Request {

    public function __construct($uri, $method, $params)
    {
        $this->uri = $uri;
        $this->params = $params;
        $this->method = $method;
    }

    public function getUri()
    {
        return $this->uri;
    }

    public function setParam($key, $value)
    {
        $this->params[$key] = $value;
        return $this;
    }

    public function getParam($key)
    {
        if (!isset($this->params[$key]))
        {
            throw new \InvalidArgumentException("The request parameter with key '$key' is invalid.");
        }
        return $this->params[$key];
    }

    public function getParams()
    {
        return $this->params;
    }
}