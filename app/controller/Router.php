<?php

require_once 'HomepageController.php';
require_once 'SignupController.php';
require_once 'SigninController.php';
require_once 'RecruitController.php';
require_once 'LeaguesController.php';

class Router 
{
  
  private $homepageCtrl;
  private $signupCtrl;
  private $recruitCtrl;
  private $leaguesCtrl;

  public function __construct()
  {
    $this->homepageCtrl = new HomepageController();
    $this->signupCtrl = new SignupController();
    $this->signinCtrl = new SigninController();
    $this->recruitCtrl = new RecruitController();
    $this->leaguesCtrl = new LeaguesController();
  }
  
  public function routeRequest()
  {
    try
    {

      if(isset($_GET['action']))
      {
        if($_GET['action'] == 'signup')
        {
          $this->signupCtrl->trySignup();
          $this->signupCtrl->signup();
        }
  
        else if($_GET['action'] == 'signin')
        {
          $this->signinCtrl->trySignin();
          $this->signinCtrl->signin();
        }
  
        else if($_GET['action'] == 'leagues')
        {
          if(isset($_SESSION['user']))
          {
            $user_id = intval($_SESSION['user_id']);
            if($user_id != 0)
            {
              $this->leaguesCtrl->leagues($user_id);
            }
            else
              throw new Exception('Invalid user ID');  
          }
          else
            throw new Exception('Connection error. User ID is not defined.');
        }
  
        else if($_GET['action'] == 'recruit') 
        {
          $this->recruitCtrl->recruit();
        }

        else
          throw new Exception('Action is not valid');
      }
      else
      {
       $this->homepageCtrl->homepage(); 
      }
    }
    catch(Exception $e)
    {
      $this->error($e->getMessage());
    }
  }

  private function error($errorMsg)
  {
    $view = new View('error');
    $view->generate(array('errorMsg' => $errorMsg));
  }
}