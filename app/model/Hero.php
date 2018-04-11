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

  public function buyHero($data)
  {
    // Save purchase to recruitment table
    $this->executeRequest(
      'INSERT INTO recruitment (hero_id, league_id, user_id, price) VALUES (:hero_id, :league_id, :user_id, :price)',
      $data
    );
  }

  public function getUserHeroes($user_id)
  {
    // 
  }
  
  public function findHeroesFromHand($user_hand)
  {
    $heroes = $this->executeRequest('SELECT * FROM heroes');
    $user_heroes = [];

    foreach($heroes as $hero)
    {
      if(
        ($hero->hero_id == $user_hand[0]->hero1_id) ||
        ($hero->hero_id == $user_hand[0]->hero2_id) ||
        ($hero->hero_id == $user_hand[0]->hero3_id) ||
        ($hero->hero_id == $user_hand[0]->hero4_id) ||
        ($hero->hero_id == $user_hand[0]->hero5_id)
      )
      {
        array_push($user_heroes, $hero);
      }
    }
    return $user_heroes;
  }
}