<?php

require_once 'view/View.php';

class DashboardController
{

  public function dashboard() 
  {
    $view = new View('Dashboard');
    $view->generate());
  }
}