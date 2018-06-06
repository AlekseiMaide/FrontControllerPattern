<?php

class Route 
{

    public function __construct($path, $controllerClassMethod) 
    {
        //Split route into method name and controller name.
        $classMethod = explode("@", $controllerClassMethod);

        $this->path = $path;
        $this->controllerClass = $classMethod[0];
        $this->method = $classMethod[1];
    }

    public function match(Request $request) 
    {
        return $this->path === $request->getUri();
    }

    public function createController() 
    {
        return new $this->controllerClass;
    }
}