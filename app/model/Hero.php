<?php

require_once 'Model.php';

class Hero extends Model
{
  /**
   * Gets the heroes in the order of a specified stat
   * @param sorting, a hero stat
   * @return array containing all heroes ordered using stat
   */
  public function getHeroes($sorting)
  {
    return $this->executeRequest('SELECT * FROM heroes ORDER BY ' . $sorting . ' DESC');
  }

  /**
   * Gets a hero given its id
   * @param order_id, a hero id
   */
  public function getHero($hero_id)
  {
    return $this->executeRequest('SELECT * FROM heroes WHERE hero_id = ' . $hero_id);
  }
}