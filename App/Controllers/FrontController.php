<?php

class FrontController
{
    public function __construct($router, $dispatcher)
    {
        $this->router = $router;
        $this->dispatcher = $dispatcher;
    }

    public function run(Request $request, Response $response)
    {
        $route = $this->router->route($request, $response);
        $this->dispatcher->dispatch($route, $request, $response);
    }
}