<?php
namespace Module\Routing;
use Module\Routing\Route;

class Router{

  public $route;
  function __autoload($classname){
    die($classname);
  }
  public function __construct($path){
    require('config/route.conf.php');
    if(!isset($routeArray[$path])){
      $path = '404';
    }
    $route = new Route($routeArray[$path]['controller'], $routeArray[$path]['action']);
    $this->route = $route;
  }

  public static function getAbsolutePathByRouteName($routeName){
    require('config/route.conf.php');
    return $routeBaseDir.$routeName;
  }

  public function loadRoute(){
    $controllerSource = 'App\Controller\\'.$this->route->controller;
    $controller = new $controllerSource;
    $view = $controller->{$this->route->function}();
    return $view;
  }
}

?>
