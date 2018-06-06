<?php

class Router 
{

    public function __construct($routes) 
    {
        $this->addRoutes($routes);
    }

    public function addRoute(Route $route) 
    {
        $this->routes[] = $route;
        return $this;
    }

    public function addRoutes(array $routes) 
    {
        foreach ($routes as $route) 
        {
            $this->addRoute($route);
        }
        return $this;
    }

    public function getRoutes() 
    {
        return $this->routes;
    }

    public function route(Request $request, Response $response) 
    {
        foreach ($this->routes as $route) 
        {
            if ($route->match($request)) 
            {
                return ["route"     =>  $route,
                        "method"    =>  $route->method];
            }
        }

        //Todo: Add error handling routes.

        $route = new Route("/404", "ErrorController@index");
        return ["route"     =>  $route,
                "method"    =>  $route->method];

        //$response->addHeader("404 Page Not Found")->send();
        //throw new \OutOfRangeException("No route matched the given URI.");
    }
}