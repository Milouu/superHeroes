<?php

require_once 'Model.php';

class Hand extends Model
{
  public function getHand($user_id, $league_id)
  {
    return $this->executeRequest('SELECT * FROM hands WHERE user_id=' . $user_id .' AND league_id=' . $league_id);
  }

  public function setHand($data)
  {
    // Save purchase to recruitment table
    $this->executeRequest(
      'INSERT INTO hands (league_id, user_id, hero1_id, hero2_id, hero3_id, hero4_id, hero5_id, hero1_order, hero2_order, hero3_order, hero4_order, hero5_order) VALUES (:league_id, :user_id, :hero1_id, :hero2_id, :hero3_id, :hero4_id, :hero5_id, :hero1_order, :hero2_order, :hero3_order, :hero4_order, :hero5_order)', $data
    );
  }

  public function getHeroesFromHand($user_hand)
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

  public function getOrderedHeroesFromHand($user_hand)
  {
    $orderedHeroes = [];
    for ($i = 0; $i < 5; $i++) { 
      array_push($orderedHeroes, $user_hand[0]->{'hero' . strval($i + 1) . '_order'});
    }
    return $orderedHeroes;    
  }
}