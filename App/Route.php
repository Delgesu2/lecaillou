<?php

namespace App;

class Route
{
    private $path;
    private $controller;

    /**
     * Route constructor.
     * @param $path    route's path
     * @param $controller  back-end controller to be called
     */
    public function __construct($path, $controller)
    {
        $this->path = $path;
        $this->controller = $controller;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return string
     */
    public function getController()
    {
        return $this->controller;
    }
    
}