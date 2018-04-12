<?php

require_once 'Model.php';

class League extends Model
{
  public function getLeagues($user_id)
  {
    return $this->executeRequest('SELECT * FROM league_users WHERE user_id = ' . $user_id);
  }

  public function addLeague($data)
  {
    $this->executeRequest('INSERT INTO leagues (league_name) VALUES (:league_name)', $data);
  }

  public function deleteLeague($leagueid)
  {
    $this->executeRequest('DELETE FROM leagues WHERE league_id=' . $league_id);
  }

  public function addLeagueUser($data)
  {
    $this->executeRequest('INSERT INTO league_users (league_id, user_id) VALUES (:league_id, :user_id)', $data);
  }
  
  public function getLeagueNames($leagues)
  {
    $league_names = [];
    foreach($leagues as $league)
    {
      $league_name = $this->executeRequest('SELECT league_name FROM leagues WHERE league_id=' . $league->league_id);
      array_push($league_names, $league_name);
    }
    return $league_names;
  }

  public function getLeagueName($league_id)
  {
    return $this->executeRequest('SELECT league_name FROM leagues WHERE league_id=' . $league_id);
  }

  public function getLeagueUsers($league_id)
  {
    return $this->executeRequest('SELECT user_id FROM league_users WHERE league_id=' . $league_id);
  }

  public function getCreatedLeagueId()
  {
    return $this->getLastId();
  }

  public function getCurrentLeagueDay($league_id)
  {
    return $this->executeRequest('SELECT current_league_day FROM leagues WHERE league_id=' . $league_id);
  }

  public function incrementCurrentLeagueDay($league_id)
  {
    // Prepare request to database
    $data = array(
      'day' => strval($this->getCurrentLeagueDay($league_id)[0]->current_league_day+1),
      'league_id' => $league_id
    );
    // Update current day in database
    $this->executeRequest('UPDATE leagues SET current_league_day = :day WHERE league_id = :league_id', $data);
  }

  public function initCurrentLeagueDay($league_id)
  {
    $this->executeRequest('UPDATE leagues SET current_league_day = 1 WHERE league_id=' . $league_id);
  }
}