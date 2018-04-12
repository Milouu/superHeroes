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
    $league_names = $this->league->getLeagueNames($leagues);
    
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
          'league_id' => $this->league->getCreatedLeagueId(),
          'user_id' => $_SESSION['user_id']
        ];
  
        $this->league->addLeagueUser($userData);
    
        $this->successMessage = 'League created';
    
        // Empty POST
        $_POST['name'] = '';

        header('Location: index.php?action=dashboard&league_id=' . $userData['league_id']);
      }
    }
    
    // Form not sent
    else
    {
      $_POST['name'] = '';
    }
  }

  public function tryJoinLeague($user_id)
  {
    // Form sent
    $code = $_POST['code'];
  
    // Handling errors
    if(empty($code))
    {
      $this->errorMessages['code'] = 'Missing code';
    }
    
    if (empty($this->errorMessages['code']))
    {
      $joinLeagueData = array(
        'league_id' => $_POST['code'],
        'user_id' => $user_id
      );

      $this->league->addLeagueUser($joinLeagueData);
  
      $this->successMessage = 'League joined';

      // Empty POST
      $_POST['code'] = '';
    
      header('Location: index.php?action=dashboard&league_id=' . $joinLeagueData['league_id']);
    }
    
    // Form not sent
    else
    {
      $_POST['code'] = '';
    }
  }
}