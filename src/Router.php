<?php

namespace Kst;

class Router {
    protected $routes = [];

    public function addRoute($route, $controller, $action, $slug) {
        $this->routes[$route] = ['controller' => $controller, 'action' => $action, 'slug' => $slug];
    }

    public function dispatch($uri) {
        if (array_key_exists($uri, $this->routes)) {
            $controller = $this->routes[$uri]['controller'];
            $action = $this->routes[$uri]['action'];

            $controller = new $controller();
            $controller->$action($this->routes[$uri]['slug']);
        } else {
            throw new \Exception("No route found for URI: $uri");
        }
    }
}
