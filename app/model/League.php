<?php

require_once 'Model.php';

class League extends Model
{
  /**
   * Gets all leagues a user is part of
   * @param user_id, a user id
   */
  public function getLeagues($user_id)
  {
    return $this->executeRequest('SELECT * FROM league_users WHERE user_id = ' . $user_id);
  }

  /**
   * Adds a new league
   * @param data, array containing a league name
   */
  public function addLeague($data)
  {
    $this->executeRequest('INSERT INTO leagues (league_name) VALUES (:league_name)', $data);
  }

  /**
   * Deletes a league
   * @param leagueid, a league id
   */
  public function deleteLeague($leagueid)
  {
    $this->executeRequest('DELETE FROM leagues WHERE league_id=' . $league_id);
  }

  /**
   * Adds a user in a league,
   * @param data, array containing a league and a user id
   */
  public function addLeagueUser($data)
  {
    $this->executeRequest('INSERT INTO league_users (league_id, user_id) VALUES (:league_id, :user_id)', $data);
  }
  
  /**
   * Gets leagues'name given their id,
   * @param leagues, array contains league ids
   */
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

  /**
   * Get a league name
   * @param league_id, a league id
   */
  public function getLeagueName($league_id)
  {
    return $this->executeRequest('SELECT league_name FROM leagues WHERE league_id=' . $league_id);
  }

  /**
   * Gets users from a league
   * @param league_id, a league id
   */
  public function getLeagueUsers($league_id)
  {
    return $this->executeRequest('SELECT user_id FROM league_users WHERE league_id=' . $league_id);
  }

  /**
   * Gets the id of a league that was just created
   */
  public function getCreatedLeagueId()
  {
    return $this->getLastId();
  }

  /**
   * Gets the league day of a league
   * @param league_id, a league id
   */
  public function getCurrentLeagueDay($league_id)
  {
    return $this->executeRequest('SELECT current_league_day FROM leagues WHERE league_id=' . $league_id);
  }

  /**
   * Increments the league day of a league
   * @param league_id, a league id
   */
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

  /**
   * Initiliazes a league day at 1
   * @param league_id, a league id
   */
  public function initCurrentLeagueDay($league_id)
  {
    $this->executeRequest('UPDATE leagues SET current_league_day = 1 WHERE league_id=' . $league_id);
  }
}