<?php

require_once 'Model.php';

class Match extends Model
{
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