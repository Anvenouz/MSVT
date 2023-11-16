<?php

namespace MSVT;

include_once "Helper/Path.php";

class Router {
  protected $routes = [];

  public function addRoute($route, $controller, $action) {
    if(!empty(\Path::ROOT_PATH)) {
      $route = '/' . trim(\Path::ROOT_PATH, '/') . $route;
    }

    $this->routes[$route] = ['controller' => $controller, 'action' => $action];
  }

  /**
   * @throws \Exception
   */
  public function dispatch($uri) {
    if (array_key_exists($uri, $this->routes)) {
        $controller = $this->routes[$uri]['controller'];
        $action = $this->routes[$uri]['action'];

        $controller = new $controller();
        $controller->$action();
    } else {
        throw new \Exception("No route found for URI: $uri");
    }
  }
}
