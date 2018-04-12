<?php

require_once 'Model.php';

class Hero extends Model
{
  public function getHeroes($sorting)
  {
    return $this->executeRequest('SELECT * FROM heroes ORDER BY ' . $sorting . ' DESC');
  }

  public function getHero($hero_id)
  {
    return $this->executeRequest('SELECT * FROM heroes WHERE hero_id = ' . $hero_id);
  }

  // public function getHeroImage($hero_id)
  // {
  //   return $this->executeRequest('SELECT ')
  // }
}