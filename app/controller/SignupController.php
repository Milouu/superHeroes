<?php

require_once 'model/Model.php';
require_once 'view/View.php';

class SignupController 
{
  public function signup()
  {
    $view = new View('Signup');
    $view->generate();
  }
}