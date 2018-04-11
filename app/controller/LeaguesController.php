<?php

require_once 'model/Model.php';
require_once 'model/League.php';
require_once 'view/View.php';

class LeaguesController
{
  private $league;

  public function __construct()
  {
    $this->league = new League();
  }

  public function leagues($user_id)
  {
    $leagues = $this->league->getLeagues($user_id);
    $view = new View('Leagues');
    $view->generate(array('leagues' => $leagues));   
  }
}