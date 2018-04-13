<?php

require_once 'Model.php';

class Match extends Model
{
  /**
   * Gets the next match for a user in a league
   * @param user_id, a user id
   * @param league_id, a league id
   * @param current_league_day, the current day of the league
   */
  public function getNextMatch($user_id, $league_id, $current_league_day)
  {
    return $this->executeRequest(
      'SELECT * FROM matches WHERE league_id = ' . $league_id . ' AND league_day = ' . $current_league_day->current_league_day . ' AND (user1_id = ' . $user_id . ' OR user2_id = ' . $user_id .' )'
    );
  }

  public function getLastMatch($user_id, $league_id, $current_league_day)
  {
    return $this->executeRequest(
      'SELECT * FROM matches WHERE league_id = ' . $league_id . ' AND league_day = ' . strval($current_league_day->current_league_day - 1) . ' AND (user1_id = ' . $user_id . ' OR user2_id = ' . $user_id .' )'
    );
  }

  public function getMatchDetails($match_id)
  {
    return $this->executeRequest('SELECT * FROM matches WHERE match_id = ' . $match_id);
  }

  /**
   * Gets all matches for a league day
   * @param league_id, a league id
   * @param league_day, a league day
   * @return array containing the 4 matches of a league day
   */
  public function getDayMatches($league_id, $league_day)
  {
    return $this->executeRequest(
      'SELECT * FROM matches WHERE league_id = ' . $league_id . ' AND league_day = ' . $league_day
    );
  }

  /**
   * Sets the result of a match
   * @param resultData, array containing match infos
   */
  public function setMatchResult($resultData)
  {
    $this->executeRequest(
      'UPDATE matches SET winner_id = :winner_id, looser_id = :looser_id, score = :score WHERE match_id = :match_id', $resultData
    );
  }

  /**
   * Gets all the victories of a user,
   * @param user_id, a user id
   * @param league_id, a league id
   */
  public function getUserVictories($user_id, $league_id)
  {
    return $this->executeRequest(
      'SELECT match_id FROM matches WHERE winner_id = ' . $user_id . ' AND league_id = ' . $league_id
    );
  }

  /**
   * Sets all matches for a league
   * @param league_id, a league id
   * @param league_users, array containing league users
   */
  public function createLeagueMatches($league_id, $league_users)
  {
    $this->executeRequest('INSERT INTO matches (league_id, league_day, user1_id, user2_id) VALUES (:league_id, :league_day, :user1_id, :user2_id)', [
      'league_id' => $league_id,
      'league_day' => 1,
      'user1_id' => $league_users[0]->user_id,
      'user2_id' => $league_users[1]->user_id
    ]);
    $this->executeRequest('INSERT INTO matches (league_id, league_day, user1_id, user2_id) VALUES (:league_id, :league_day, :user1_id, :user2_id)', [
      'league_id' => $league_id,
      'league_day' => 1,
      'user1_id' => $league_users[2]->user_id,
      'user2_id' => $league_users[3]->user_id
    ]);
    $this->executeRequest('INSERT INTO matches (league_id, league_day, user1_id, user2_id) VALUES (:league_id, :league_day, :user1_id, :user2_id)', [
      'league_id' => $league_id,
      'league_day' => 1,
      'user1_id' => $league_users[4]->user_id,
      'user2_id' => $league_users[5]->user_id
    ]);
    $this->executeRequest('INSERT INTO matches (league_id, league_day, user1_id, user2_id) VALUES (:league_id, :league_day, :user1_id, :user2_id)', [
      'league_id' => $league_id,
      'league_day' => 1,
      'user1_id' => $league_users[6]->user_id,
      'user2_id' => $league_users[7]->user_id
    ]);
    

    $this->executeRequest('INSERT INTO matches (league_id, league_day, user1_id, user2_id) VALUES (:league_id, :league_day, :user1_id, :user2_id)', [
      'league_id' => $league_id,
      'league_day' => 2,
      'user1_id' => $league_users[0]->user_id,
      'user2_id' => $league_users[2]->user_id
    ]);
    $this->executeRequest('INSERT INTO matches (league_id, league_day, user1_id, user2_id) VALUES (:league_id, :league_day, :user1_id, :user2_id)', [
      'league_id' => $league_id,
      'league_day' => 2,
      'user1_id' => $league_users[1]->user_id,
      'user2_id' => $league_users[3]->user_id
    ]);
    $this->executeRequest('INSERT INTO matches (league_id, league_day, user1_id, user2_id) VALUES (:league_id, :league_day, :user1_id, :user2_id)', [
      'league_id' => $league_id,
      'league_day' => 2,
      'user1_id' => $league_users[4]->user_id,
      'user2_id' => $league_users[6]->user_id
    ]);
    $this->executeRequest('INSERT INTO matches (league_id, league_day, user1_id, user2_id) VALUES (:league_id, :league_day, :user1_id, :user2_id)', [
      'league_id' => $league_id,
      'league_day' => 2,
      'user1_id' => $league_users[5]->user_id,
      'user2_id' => $league_users[7]->user_id
    ]);
    

    $this->executeRequest('INSERT INTO matches (league_id, league_day, user1_id, user2_id) VALUES (:league_id, :league_day, :user1_id, :user2_id)', [
      'league_id' => $league_id,
      'league_day' => 3,
      'user1_id' => $league_users[0]->user_id,
      'user2_id' => $league_users[3]->user_id
    ]);
    $this->executeRequest('INSERT INTO matches (league_id, league_day, user1_id, user2_id) VALUES (:league_id, :league_day, :user1_id, :user2_id)', [
      'league_id' => $league_id,
      'league_day' => 3,
      'user1_id' => $league_users[1]->user_id,
      'user2_id' => $league_users[2]->user_id
    ]);
    $this->executeRequest('INSERT INTO matches (league_id, league_day, user1_id, user2_id) VALUES (:league_id, :league_day, :user1_id, :user2_id)', [
      'league_id' => $league_id,
      'league_day' => 3,
      'user1_id' => $league_users[4]->user_id,
      'user2_id' => $league_users[7]->user_id
    ]);
    $this->executeRequest('INSERT INTO matches (league_id, league_day, user1_id, user2_id) VALUES (:league_id, :league_day, :user1_id, :user2_id)', [
      'league_id' => $league_id,
      'league_day' => 3,
      'user1_id' => $league_users[5]->user_id,
      'user2_id' => $league_users[6]->user_id
    ]);
    

    $this->executeRequest('INSERT INTO matches (league_id, league_day, user1_id, user2_id) VALUES (:league_id, :league_day, :user1_id, :user2_id)', [
      'league_id' => $league_id,
      'league_day' => 4,
      'user1_id' => $league_users[0]->user_id,
      'user2_id' => $league_users[4]->user_id
    ]);
    $this->executeRequest('INSERT INTO matches (league_id, league_day, user1_id, user2_id) VALUES (:league_id, :league_day, :user1_id, :user2_id)', [
      'league_id' => $league_id,
      'league_day' => 4,
      'user1_id' => $league_users[1]->user_id,
      'user2_id' => $league_users[5]->user_id
    ]);
    $this->executeRequest('INSERT INTO matches (league_id, league_day, user1_id, user2_id) VALUES (:league_id, :league_day, :user1_id, :user2_id)', [
      'league_id' => $league_id,
      'league_day' => 4,
      'user1_id' => $league_users[2]->user_id,
      'user2_id' => $league_users[6]->user_id
    ]);
    $this->executeRequest('INSERT INTO matches (league_id, league_day, user1_id, user2_id) VALUES (:league_id, :league_day, :user1_id, :user2_id)', [
      'league_id' => $league_id,
      'league_day' => 4,
      'user1_id' => $league_users[3]->user_id,
      'user2_id' => $league_users[7]->user_id
    ]);
    

    $this->executeRequest('INSERT INTO matches (league_id, league_day, user1_id, user2_id) VALUES (:league_id, :league_day, :user1_id, :user2_id)', [
      'league_id' => $league_id,
      'league_day' => 5,
      'user1_id' => $league_users[0]->user_id,
      'user2_id' => $league_users[5]->user_id
    ]);
    $this->executeRequest('INSERT INTO matches (league_id, league_day, user1_id, user2_id) VALUES (:league_id, :league_day, :user1_id, :user2_id)', [
      'league_id' => $league_id,
      'league_day' => 5,
      'user1_id' => $league_users[1]->user_id,
      'user2_id' => $league_users[6]->user_id
    ]);
    $this->executeRequest('INSERT INTO matches (league_id, league_day, user1_id, user2_id) VALUES (:league_id, :league_day, :user1_id, :user2_id)', [
      'league_id' => $league_id,
      'league_day' => 5,
      'user1_id' => $league_users[2]->user_id,
      'user2_id' => $league_users[7]->user_id
    ]);
    $this->executeRequest('INSERT INTO matches (league_id, league_day, user1_id, user2_id) VALUES (:league_id, :league_day, :user1_id, :user2_id)', [
      'league_id' => $league_id,
      'league_day' => 5,
      'user1_id' => $league_users[3]->user_id,
      'user2_id' => $league_users[4]->user_id
    ]);
    

    $this->executeRequest('INSERT INTO matches (league_id, league_day, user1_id, user2_id) VALUES (:league_id, :league_day, :user1_id, :user2_id)', [
      'league_id' => $league_id,
      'league_day' => 6,
      'user1_id' => $league_users[0]->user_id,
      'user2_id' => $league_users[6]->user_id
    ]);
    $this->executeRequest('INSERT INTO matches (league_id, league_day, user1_id, user2_id) VALUES (:league_id, :league_day, :user1_id, :user2_id)', [
      'league_id' => $league_id,
      'league_day' => 6,
      'user1_id' => $league_users[1]->user_id,
      'user2_id' => $league_users[7]->user_id
    ]);
    $this->executeRequest('INSERT INTO matches (league_id, league_day, user1_id, user2_id) VALUES (:league_id, :league_day, :user1_id, :user2_id)', [
      'league_id' => $league_id,
      'league_day' => 6,
      'user1_id' => $league_users[2]->user_id,
      'user2_id' => $league_users[4]->user_id
    ]);
    $this->executeRequest('INSERT INTO matches (league_id, league_day, user1_id, user2_id) VALUES (:league_id, :league_day, :user1_id, :user2_id)', [
      'league_id' => $league_id,
      'league_day' => 6,
      'user1_id' => $league_users[3]->user_id,
      'user2_id' => $league_users[5]->user_id
    ]);
    

    $this->executeRequest('INSERT INTO matches (league_id, league_day, user1_id, user2_id) VALUES (:league_id, :league_day, :user1_id, :user2_id)', [
      'league_id' => $league_id,
      'league_day' => 7,
      'user1_id' => $league_users[0]->user_id,
      'user2_id' => $league_users[7]->user_id
    ]);
    $this->executeRequest('INSERT INTO matches (league_id, league_day, user1_id, user2_id) VALUES (:league_id, :league_day, :user1_id, :user2_id)', [
      'league_id' => $league_id,
      'league_day' => 7,
      'user1_id' => $league_users[1]->user_id,
      'user2_id' => $league_users[4]->user_id
    ]);
    $this->executeRequest('INSERT INTO matches (league_id, league_day, user1_id, user2_id) VALUES (:league_id, :league_day, :user1_id, :user2_id)', [
      'league_id' => $league_id,
      'league_day' => 7,
      'user1_id' => $league_users[2]->user_id,
      'user2_id' => $league_users[5]->user_id
    ]);
    $this->executeRequest('INSERT INTO matches (league_id, league_day, user1_id, user2_id) VALUES (:league_id, :league_day, :user1_id, :user2_id)', [
      'league_id' => $league_id,
      'league_day' => 7,
      'user1_id' => $league_users[3]->user_id,
      'user2_id' => $league_users[6]->user_id
    ]);
  }
}