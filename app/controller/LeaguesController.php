<?php

require_once 'model/Model.php';
require_once 'model/League.php';
require_once 'view/View.php';

class LeaguesController
{
  private $errorMessages;
  private $successMessage;
  private $league;

  public function __construct()
  {
    $this->errorMessages = [];
    $this->successMessage = '';
    $this->league = new League();
  }

  public function leagues($user_id)
  {
    $leagues = $this->league->getLeagues($user_id);
    $league_names = array();

    foreach($leagues as $league)
    {
      $league_name = $this->league->getLeagueName($league->league_id);
      array_push($league_names, $league_name);
    }
    echo '<pre>';
    var_dump($league_names);
    echo '</pre>';
    $view = new View('Leagues');
    $view->generate(array('leagues' => $leagues, 'league_names' => $league_names));   
  }

  public function tryAddLeague($user_id)
  {
    // Form sent
    if(!empty($_POST['name']))
    {
      $name = $_POST['name'];
    
      // Handling errors
      if(empty($name))
      {
        $this->errorMessages['name'] = 'Missing name';
      }
      else if(strlen($name) < 4)
      {
        $this->errorMessages['name'] = 'Name is too short';
      }
    
      if(empty($this->errorMessages))
      {
        $leagueData = [
          "league_name" => $name
        ];

        $this->league->addLeague($leagueData);

        $userData = [
          "league_id" => $this->league->getCreatedLeagueId(),
          "league_name" => $name,
          "user_id" => $_SESSION['user_id']
        ];

        $this->league->addLeagueUser($userData);
    
        $this->successMessage = 'League created';
    
        // Empty POST
        $_POST['name'] = '';
      }
    }
    
    // Form not sent
    else
    {
      $_POST['name'] = '';
    }
  }

  public function joinLeague($user_id)
  {
    // Form sent
    if(!empty($_POST['code']))
    {
      $code = $_POST['code'];
    
      // Handling errors
      if(empty($code))
      {
        $this->errorMessages['code'] = 'Missing code';
      }
      else
      {

        $this->league->addLeagueUser($userData);
    
        $this->successMessage = 'League created';
    
        // Empty POST
        $_POST['code'] = '';
      }
    }
    
    // Form not sent
    else
    {
      $_POST['code'] = '';
    }
  }
}