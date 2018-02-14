<?php
namespace App\Controller;
use App\Model\Media;
use App\Model\User;
use App\View\LoginFormView;
use App\Model\AbstractModel;
use App\Controller\UserController;
use Module\Routing\Router;

class MediaController{
  function __construct(){
  }

  public function listMedia(){
    $user= new UserController;
    if(!$user->isLoggedIn()){
      header('Location: '.Router::getAbsolutePathByRouteName('login'));
      exit;
    };
    $media = new Media();
    $param['mediaArray'] = $media->getAll();
    include('app/view/ListMediaView.php');
  }
}




 ?>
