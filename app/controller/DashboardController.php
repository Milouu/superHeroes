<?php

require_once 'model/Model.php';
require_once 'model/League.php';
require_once 'model/User.php';
require_once 'model/Hand.php';
require_once 'model/Hero.php';
require_once 'model/Match.php';
require_once 'view/View.php';

class DashboardController
{
  private $errorMessages = [];
  private $successMessages = [];
  private $league;
  private $user;
  private $hand;
  private $hero;
  private $match;
  
    public function __construct()
    {
      $this->league = new League();
      $this->user = new User();
      $this->hand = new Hand();
      $this->hero = new Hero();
      $this->match = new Match();
    }

  public function dashboard($league_id) 
  { 
    $league_name = $this->league->getLeagueName($league_id);
    $league_users = $this->league->getLeagueUsers($league_id);
    $current_league_day = $this->league->getCurrentLeagueDay($league_id);

    $user_names = $this->user->getUserNames($league_users);

    $user_hand = $this->hand->getHand($_SESSION['user_id'], $league_id);
    $user_heroes = $this->hero->findHeroesFromHand($user_hand);

    $view = new View('Dashboard');
    $view->generate(array(
      'errorMessages' => $this->errorMessages,
      'successMessages' => $this->successMessages,
      'league_name' => $league_name, 
      'league_users' => $league_users,
      'current_league_day' => $current_league_day, 
      'user_names' => $user_names,
      'user_heroes' => $user_heroes
    ));
  }

  public function tryLaunchLeague($league_id)
  {
    $league_users = $this->league->getLeagueUsers($league_id);

    if(count($league_users) == 8)
    {
      $this->match->createLeagueMatches($league_id, $league_users);
      $this->league->initCurrentLeagueDay($league_id);
      $this->successMessages['leagueCreation'] = 'League successfully created';
      
      header('Location: index.php?action=dashboard&league_id=' .$league_id);
    }
    else 
    {
      $this->errorMessages['tryLaunchLeague'] = 'Need 8 players to launch league';
    }
  }

  public function setSessionLeagueId($league_id)
  {
    $_SESSION['league_id'] = $league_id;
  }
}