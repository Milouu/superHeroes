<?php

require_once 'model/Model.php';
require_once 'model/League.php';
require_once 'model/User.php';
require_once 'view/View.php';

class DashboardController
{
  private $league;
  private $user;
  
    public function __construct()
    {
      $this->league = new League();
      $this->user = new User();
    }

  public function dashboard($league_id) 
  { 
    $league_name = $this->league->getLeagueName($league_id);
    $league_users = $this->league->getLeagueUsers($league_id);
    $user_names = $this->user->getUserNames($league_users);
    $view = new View('Dashboard');
    $view->generate(array('league_name' => $league_name, 'league_users' => $league_users, 'user_names' => $user_names));
  }

  public function setSessionLeagueId($league_id)
  {
    $_SESSION['league_id'] = $league_id;
  }
}