<?php

require_once 'Model.php';

class Match extends Model
{
  public function getNextMatch($user_id, $league_id, $current_league_day)
  {
    return $this->executeRequest('SELECT * FROM matches WHERE league_id = ' . $league_id . ' AND league_day = ' . $current_league_day->current_league_day . ' AND (user1_id = ' . $user_id . ' OR user2_id = ' . $user_id .' )');
  }

  public function getDayMatches($league_id, $league_day)
  {
    return $this->executeRequest(
      'SELECT * FROM matches WHERE league_id = ' . $league_id . ' AND league_day = ' . $league_day
    );
  }

  public function setNextLeagueDay($league_id, $current_league_day)
  {
    $dayMatches = $this->match->getDayMatches($league_id, $current_league_day);
  }

  public function setMatchResult($user_id, $league_id, $current_league_day)
  {
    $match = $this->match->getNextMatch($user_id, $league_id, $current_league_day);
    $opponent = $match[0]->user2_id;

    // Get user hands
    $playerHand = $this->hand->getOrderedHeroesFromHand(
      $this->hero->getHand($user_id, $league_id)
    );
    $hand2 = $this->hand->getOrderedHeroesFromHand(
      $this->hero->getHand($user_id, $league_id)
    );

    // Simulate all 5 rounds
    for($i = 0; $i < 5; $i++)
    {

    }
  }

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