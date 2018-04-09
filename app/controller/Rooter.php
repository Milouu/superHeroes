<?php

require_once 'HomepageController.php'

class Rooter 
{
  
  private $homepageCtrl;

  public function __construct() 
  {
    $this->$homepageCtrl = new homepageCtrl();
  }
  
  public function rootRequest()
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