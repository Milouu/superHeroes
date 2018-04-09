<?php

require_once 'HomepageController.php';

class Router 
{
  
  private $homepageCtrl;

  public function __construct() 
  {
    $this->homepageCtrl = new HomepageController();
  }
  
  public function routeRequest()
  {
    if(isset($_GET['action']))
    {
  
    }
    else
    {
     $this->homepageCtrl->homepage(); 
    }
  }

}