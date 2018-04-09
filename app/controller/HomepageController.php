<?php

require_once 'View/View.php';

class HomepageController
{
  public function homepage() 
  {
    $view = new View('Homepage');
    $view->generate();
  }
}