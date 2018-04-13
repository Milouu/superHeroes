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

  /**
   * Display dashboard page for the league with id given as param
   * @param league_id, A league id
   */
  public function dashboard($league_id) 
  {
    $league_name = $this->league->getLeagueName($league_id)[0];
    $league_users = $this->league->getLeagueUsers($league_id);
    $current_league_day = $this->league->getCurrentLeagueDay($league_id)[0];

    $user_names = $this->user->getUserNames($league_users);

    $user_hand = $this->hand->getHand($_SESSION['user_id'], $league_id);
    $user_heroes = $this->hand->getHeroesFromHand($user_hand);

    // Don't get next match data on last league day
    if (intval($current_league_day->current_league_day) < 8 && intval($current_league_day->current_league_day) > 0)
    {
      $next_match = $this->match->getNextMatch($_SESSION['user_id'], $league_id, $current_league_day)[0];
      if($next_match->user1_id == $_SESSION['user_id'])
      {
        $opponent_hand = $this->hand->getHand($next_match->user2_id, $league_id);
      }
      else
      {
        $opponent_hand = $this->hand->getHand($next_match->user1_id, $league_id);
      }
      $opponent_heroes = $this->hand->getHeroesFromHand($opponent_hand);
    }
    else
    {
      // Prevent undefined variable notices
      $next_match = new StdClass();
      $opponent_heroes = new StdClass();
    }

    // Don't get last match data on first league day
    if (intval($current_league_day->current_league_day) > 1)
    {
      $last_match_data = $this->match->getLastMatch($_SESSION['user_id'], $league_id, $current_league_day)[0];

      if ($_SESSION['user_id'] == $last_match_data->user1_id) {
        $last_id = $last_match_data->user2_id;
      } else {
        $last_id = $last_match_data->user2_id;
      }

      $lastIdObject = new stdClass();
      $lastIdObject->user_id = $last_id;

      $last_opponent = $this->user->getUserNames([$lastIdObject])[0];

      $last_match = array(
        'victory' => $_SESSION['user_id'] == $last_match_data->winner_id,
        'opponent' => $last_opponent[0]->user_name,
        'score' => $last_match_data->score
      );
    }
    else
    {
      // Prevent undefined error
      $last_match = [];
    }
    $league_table = $this->getLeagueTable($league_id);

    $view = new View('Dashboard');
    $view->generate(array(
      'errorMessages' => $this->errorMessages,
      'successMessages' => $this->successMessages,
      'league_name' => $league_name, 
      'league_users' => $league_users,
      'current_league_day' => $current_league_day, 
      'user_names' => $user_names,
      'user_heroes' => $user_heroes,
      'user_current_hand' => $user_hand[0],
      'opponent_heroes' => $opponent_heroes,
      'league_table' => $league_table,
      'last_match' => $last_match
    ));

  }

  /**
   * Handle errors when trying to launch league and launches it if no errors
   * @param league_id, a league id
   */
  public function tryLaunchLeague($league_id)
  {
    $league_users = $this->league->getLeagueUsers($league_id);

    if(count($league_users) == 8 && $this->verifyUsersRecruitement($league_id, $league_users))
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

  /**
   * Verifies if all league users have made recruitement
   * @param league_id, a league id
   */
  public function verifyUsersRecruitement($league_id, $league_users)
  {
    foreach($league_users as $league_user)
    {
      $user_hand = $this->hand->getHand($league_user->user_id, $league_id)[0];

      if(empty($user_hand))
      {
        return false;
      }
    }
    return true;
  }

  /**
   * Calculate a match result
   * @param match_id, a match id
   */
  public function getMatchResult($match_id)
  {
    $matchDetails = $this->match->getMatchDetails($match_id);

    // Get user hands
    $hand1 = $this->hand->getOrderedHeroesFromHand(
      $this->hand->getHand($matchDetails[0]->user1_id, $matchDetails[0]->league_id)
    );
    $hand2 = $this->hand->getOrderedHeroesFromHand(
      $this->hand->getHand($matchDetails[0]->user2_id, $matchDetails[0]->league_id)
    );

    $pointsUser1 = 0;
    $pointsUser2 = 0;

    // Simulate all 5 rounds
    for($i = 0; $i < 5; $i++)
    {
      $hero1 = $this->hero->getHero($hand1[$i]);
      $hero2 = $this->hero->getHero($hand2[$i]);

      // Get winner
      $hero1[0]->average > $hero2[0]->average ? $pointsUser1++ : $pointsUser2++;
    }

    // Calculate score
    $score = $pointsUser1 . '-' . $pointsUser2;

    // Get winner
    $winner = $pointsUser1 > $pointsUser2 ? $matchDetails[0]->user1_id : $matchDetails[0]->user2_id;
    $looser = $pointsUser1 < $pointsUser2 ? $matchDetails[0]->user1_id : $matchDetails[0]->user2_id;

    // Prepare saving to database
    $resultData = array(
      'winner_id' => $winner,
      'looser_id' => $looser,
      'score' => $score,
      'match_id' => $match_id
    );

    // Save result to database
    $this->match->setMatchResult($resultData);
  }

  /**
   * Calculate all result for the day in a league and increment the league day
   * @param league_id, a league id
   */
  public function setNextLeagueDay($league_id)
  {
    $currentLeagueDay = $this->league->getCurrentLeagueDay($league_id)[0]->current_league_day;
    $dayMatches = $this->match->getDayMatches($league_id, $currentLeagueDay);

    // Set all results for that day
    foreach ($dayMatches as $match)
    {
      $this->getMatchResult($match->match_id);
    }

    $this->league->incrementCurrentLeagueDay($league_id);

    // Redirect to dashboard
    header('Location: index.php?action=dashboard&league_id=' . $league_id);
  }

  public function getLeagueTable($league_id)
  {
    $leagueUsers = $this->league->getLeagueUsers($league_id);
    $userVictories = [];

    foreach ($leagueUsers as $user)
    {
      // Get username from user id
      $userName = $this->user->getUserNames([$user])[0];

      // Get his victories
      $userVictories[$userName[0]->user_name] = count(
        $this->match->getUserVictories($user->user_id, $league_id)
      );
    }

    // Prepare sorting
    function descendingSort($a, $b)
    {
      if ($a == $b)
      {
        return 0;
      }
      return ($a > $b) ? -1 : 1;
    }

    // Sort victories by users
    uasort($userVictories, 'descendingSort');

    return $userVictories;
  }
  
  /**
   * Handle errors when trying to set heroes order for next match
   * @param user_id, a user id
   * @param league_id, a league id
   */
  public function trySetOrder($user_id, $league_id)
  {
    //Form sent
    if(!empty($_POST))
    { 
      $order = [
        'order1' => isset($_POST['order1']) ? $_POST['order1'] : '',
        'order2' => isset($_POST['order2']) ? $_POST['order2'] : '',
        'order3' => isset($_POST['order3']) ? $_POST['order3'] : '',
        'order4' => isset($_POST['order4']) ? $_POST['order4'] : '',
        'order5' => isset($_POST['order5']) ? $_POST['order5'] : '',
      ];

      if(($this->testOrder($order)) == -1)
      {
        $this->errorMessages['order'] = 'Each hero can only play once';
      }
      else if(($this->testOrder($order)) == -2)
      {
        $this->errorMessages['order'] = 'Missing hero in order';
      }

      if(empty($this->errorMessages['order']))
      {
        $user_hand = $this->hand->getHand($_SESSION['user_id'], $_GET['league_id'])[0];
        $order_ids = $this->hand->getIdsFromOrder($user_hand, $order);
        $this->hand->setOrder($user_hand, $order_ids);

        $this->successMessages['order'] = 'Order set successfully !';

        header('Location: index.php?action=dashboard&league_id=' .$_GET['league_id']);
      }

    }
    // Form not sent
    else 
    {
      // header('Location: '. $_SERVER['REQUEST_URI']);
    }
  }

  /**
   * Tests that no hero has been used at least 2 times in the order
   * @param order, an array containing the hero id for each round in the next match
   */
  public function testOrder($order)
  {
    for($i=1; $i <= count($order)-1; $i++)
    {
      for($j=$i+1; $j <= count($order); $j++)
      {
        if($order['order'.$i] == $order['order'.$j])
        {
          return -1;
        }
        else if(($order['order'.$i]) == '')
        {
          return -2;
        }
      }
    }
    return 1;
  }

  /**
   * Sets session variable league_id
   * @param league_id, a league id
   */
  public function setSessionLeagueId($league_id)
  {
    $_SESSION['league_id'] = $league_id;
  }
}