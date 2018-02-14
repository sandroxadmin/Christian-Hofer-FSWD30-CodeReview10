<?php
$routeBaseDir = '/codefactory/php/cr10_christian_hofer_biglibary/';

$routeArray= [
          'media/list'        => ['controller' => 'MediaController', 'action' => 'listMedia'],
          'register'          => ['controller' => 'UserController', 'action' => 'register'],
          'login'             => ['controller' => 'UserController', 'action' => 'login'],
          '404'               => ['controller' => 'UserController', 'action' => 'login']
  ];
 ?>
