<?php

require_once 'Model.php';

class League extends Model
{
  public function getLeagues($user_id)
  {
    return $this->executeRequest('SELECT * FROM league_users WHERE id = ' . $user_id);
  
  }

  public function addLeague($data)
  {
    $this->executeRequest('INSERT INTO league_users (league_id, user_id) VALUES (:league_id, :user_id)', $data);
  }
}