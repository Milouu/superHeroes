<?php

require_once 'HomepageController.php';
require_once 'SignupController.php';
require_once 'RecruitController.php';

class Router 
{
  
  private $homepageCtrl;
  private $signupCtrl;
  private $recruitCtrl;

  public function __construct() 
  {
    $this->homepageCtrl = new HomepageController();
    $this->signupCtrl = new SignupController();
    $this->recruitCtrl = new RecruitController();
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

      else if($_GET['action'] == 'recruit') {
        $this->recruitCtrl->recruit();
      }
    }
    else
    {
     $this->homepageCtrl->homepage(); 
    }
  }

}