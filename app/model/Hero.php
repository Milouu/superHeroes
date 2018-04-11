<?php

require_once 'Model.php';

class Hero extends Model
{
  public function getHeroes($sorting)
  {
    return $this->executeRequest('SELECT * FROM heroes ORDER BY ' . $sorting . ' DESC');
  }
}