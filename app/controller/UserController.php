<?php
namespace App\Controller;
use App\Model\AbstractModel;
use App\Model\User;
use App\View\LoginFormView;


class UserController{
  function __construct(){
      session_start();
  }
  public function login(){
    $viewParam = Array();
    if(!$this->isLoggedIn()){
      if(isset($_POST['email']) && isset($_POST['password'])){
        $user = new User();
        $user = $user->getUserByEmail($_POST['email']);
          if($user != NULL && password_verify($_POST['password'], $user->passwordHash)){
          $_SESSION['user_id'] = $user->userId;
          $viewParam ['loginSuccess'] = true;
        }else{
          $viewParam ['loginSuccess'] = false;
        }
      }
    }else{
      $viewParam ['loginSuccess'] = true;
    }
    $view = $this->getLoginForm($viewParam);
    return $view;
  }

  public function register(){
    $viewParam = Array();
    session_start();
    if(!$this->isLoggedIn()){
      die('You are already logged in!');
    }elseif(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['firstName']) && isset($_POST['surname'])){
        $user = new User();
        $user->email = $_POST['email'];
        $user->firstName = $_POST['firstName'];
        $user->surname = $_POST['surname'];
        $user->password = $_POST['password'];
        $user->save();
        }else{
          $viewParam ['registrationSucess'] = false;
        }
    $view = $this->getRegistrationForm($viewParam);
    return $view;
  }
  public function getLoginForm($param){
    include('app/view/LoginFormView.php');
  }

  public function getRegistrationForm($param){
    include('app/view/RegistrationFormView.php');
  }
  public function isLoggedIn(){
    return isset($_SESSION['user_id']) ? true : false;
  }
}




 ?>
