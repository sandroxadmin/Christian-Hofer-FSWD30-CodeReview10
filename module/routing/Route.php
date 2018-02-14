<?php
namespace Module\Routing;

class Route{
  public $controller;
  public $function;

  function __construct(String $controller, String $function){
    $this->controller = $controller;
    $this->function = $function;
  }
}

?>
