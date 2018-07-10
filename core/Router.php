<?php

class Router
{
  public $routes = [
      'GET'=>[],
      'POST'=>[]
  ];

  public static function load($file)
  {

    $router = new static;

    require $file;

    return $router;
  }

  public function get($uri, $controller)
  {
    $this->routes['GET'][$uri] = $controller;
  }
  
  public function post($uri, $controller)
  {
    $this->routes['POST'][$uri] = $controller;
  }

  public function direct($uri, $requestType)
  {
    if (array_key_exists($uri, $this->routes[$requestType])){
      
      // PagesController@home

      return $this->callAction(

        // explode will split the two parts (PagesController and 'home', for example) and make them two elements in an array - and the '...' will pass these as arguments to a method/function
        ...explode('@', $this->routes[$requestType][$uri])
      );

    }

    throw new Exception('No route defined for this uri');
  }

  protected function callAction($controller, $action)
  {
    if (! method_exists($controller, $action)){
      throw new Exception(
        "{$controller} does not respond to the {$action} action."
      );
    }

    return (new $controller)->$action();

  }

}