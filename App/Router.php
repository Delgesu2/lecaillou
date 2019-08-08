<?php

namespace App;

class Router
{
    /**
     * @var array paths
     */
    private $routes = [];

    public function __construct()
    {
        $this->createRoutes();
    }

    public function createRoutes()
    {
        $routes = require __DIR__ . './../config/routes.php';

        foreach ($routes as $route) {
            $this->routes[] = new Route($route['path'], $route['controller']);
        }
    }

    public function createController($class)
    {
        return new $class();
    }

    public function handleRequest($request)
    {
        foreach ($this->routes as $route) {
            if ($route->getPath() === $request) {
                $class = $this->createController($route->getController());
                return $class();
                }
        }
        throw new \Exception(header('Location:/crash'));        
    }
}
