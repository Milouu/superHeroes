<?php

require_once 'model/Hero.php';
require_once 'view/View.php';

class RecruitController
{

  private $hero;

  public function __construct()
  {
    $this->hero = new Hero();
  }

  public function recruit() 
  {
    $heroes = $this->hero->getHeroes();
    $view = new View('Recruit');
    $view->generate(array('heroes' => $heroes));
  }
}