<?php

use icd0007\App\Autoloader;

require_once __DIR__ ."/Autoloader.php";
$autoLoader = new Autoloader();
$autoLoader->register();

//Define application routes:
$router = new Router([
    new Route("/", "ContactController@index"),
    new Route("/kontakt/{id}", "ContactController@show"),
    new Route("/uus", "ContactController@create")
]);

$dispatcher = new Dispatcher;

$frontController = new FrontController($router, $dispatcher);
$frontController->run(new Request($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD'], $_REQUEST), 
					  new Response($_SERVER["SERVER_PROTOCOL"]));
