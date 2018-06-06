<?php

class Dispatcher 
{

    public function dispatch($route, $request, $response)
    {
        $controller = $route["route"]->createController();
        $controller->{$route["method"]}($request, $response);
    }
}