<?php

namespace app\src;

use Closure;

class Router
{
    protected $routes = [];
    public function __construct()
    {

    }

    public function get(string $path, Closure $callback)
    {
        $this->routes[] = $callback;
    }

    public function getRoutes() {
        return $this->routes;
    }
}