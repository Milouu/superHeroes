<?php

require_once 'Model.php';

class Hand extends Model
{
  public function getHand($user_id, $league_id)
  {
    return $this->executeRequest('SELECT * FROM hands WHERE user_id=' . $user_id .' AND league_id=' . $league_id);
  }
}