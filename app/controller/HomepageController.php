<?php

require_once 'model/Hero.php';
require_once 'view/View.php';

class HomepageController
{

  private $hero;

  public function __construct()
  {
    $this->hero = new Hero();
  }

  public function homepage() 
  {
    $view = new View('Homepage');
    $view->generate();
  }
}