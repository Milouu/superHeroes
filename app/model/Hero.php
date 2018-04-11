<?php

require_once 'Model.php';

class Hero extends Model
{
  public function getHeroes()
  {
    return $this->executeRequest('SELECT * FROM heroes');
  }
}