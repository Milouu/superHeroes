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
      $league_name = $this->executeRequest('SELECT league_name FROM leagues WHERE league_id=' .$league->league_id);
      array_push($league_names, $league_name);
    }
    return $league_names;
  }

  public function getCreatedLeagueId()
  {
    // return $this->executeRequest('SELECT LAST_INSERT_ID() FROM leagues');
    return $this->getLastId();
  }
}