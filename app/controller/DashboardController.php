<?php

require_once 'model/Model.php';
require_once 'model/League.php';
require_once 'model/User.php';
require_once 'model/Hand.php';
require_once 'model/Hero.php';
require_once 'view/View.php';

class DashboardController
{
  private $league;
  private $user;
  private $hand;
  private $hero;
  
    public function __construct()
    {
      $this->league = new League();
      $this->user = new User();
      $this->hand = new Hand();
      $this->hero = new Hero();
    }

  public function dashboard($league_id) 
  { 
    $league_name = $this->league->getLeagueName($league_id);
    $league_users = $this->league->getLeagueUsers($league_id);
    $user_names = $this->user->getUserNames($league_users);
    $user_hand = $this->hand->getHand($_SESSION['user_id'], $league_id);
    $user_heroes = $this->hero->findHeroesFromHand($user_hand);

    $view = new View('Dashboard');
    $view->generate(array(
      'league_name' => $league_name, 
      'league_users' => $league_users, 
      'user_names' => $user_names,
      'user_heroes' => $user_heroes
    ));
  }

  public function setSessionLeagueId($league_id)
  {
    $_SESSION['league_id'] = $league_id;
  }
}