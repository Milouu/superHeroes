<?php

require_once 'HomepageController.php';
require_once 'SignupController.php';

class Router 
{
  
  private $homepageCtrl;
  private $signupCtrl;

  public function __construct() 
  {
    $this->homepageCtrl = new HomepageController();
    $this->signupCtrl = new SignupController();
  }
  
  public function routeRequest()
  {
    if(isset($_GET['action']))
    {
      if($_GET['action'] == 'signup')
      {
        $this->signupCtrl->signup();
      }

      else if($_GET['action'] == 'trySignup')
      {
        $this->signupCtrl->trySignup();
      }
    }
    else
    {
     $this->homepageCtrl->homepage(); 
    }
  }

}