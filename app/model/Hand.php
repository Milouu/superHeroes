<?php

require_once 'Model.php';

class Hand extends Model
{
  /**
   * Gets the heroes from a user in a league
   * @param user_id, a user id
   * @param league_id, a league id
   * @return array containing the heroes info
   */
  public function getHand($user_id, $league_id)
  {
    return $this->executeRequest('SELECT * FROM hands WHERE user_id=' . $user_id .' AND league_id=' . $league_id);
  }

  /**
   * Sets the heroes from a user in a league
   * @param data, array containing the hand's info
   */
  public function setHand($data)
  {
    // Save purchase to recruitment table
    $this->executeRequest(
      'INSERT INTO hands (league_id, user_id, hero1_id, hero2_id, hero3_id, hero4_id, hero5_id, hero1_order, hero2_order, hero3_order, hero4_order, hero5_order) VALUES (:league_id, :user_id, :hero1_id, :hero2_id, :hero3_id, :hero4_id, :hero5_id, :hero1_order, :hero2_order, :hero3_order, :hero4_order, :hero5_order)', $data
    );
  }

  /**
   * Gets the heroes from a user's hand
   * @param user_hand, a user's hand
   * @return array containing heroes'info 
   */
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

  /**
   * Gets the order for the next match from a user's hand
   * @param user_hand, a user's hand
   * @return array containing heroes'order
   */
  public function getOrderedHeroesFromHand($user_hand)
  {
    $orderedHeroes = [];
    for ($i = 0; $i < 5; $i++) 
    { 
      array_push($orderedHeroes, $user_hand[0]->{'hero' . strval($i + 1) . '_order'});
    }
    return $orderedHeroes;
  }

  /**
   * Gets heroes'id from the order decided in order form
   * @param user_hand, a user's hand
   * @param  order, array containing the order decided in order form
   * @return order_ids, array containing heroes's id in the right order
   */
  public function getIdsFromOrder($user_hand, $order)
  {
    $order_ids = [
      'order1_id' => 0,
      'order2_id' => 0,
      'order3_id' => 0,
      'order4_id' => 0,
      'order5_id' => 0,
    ];

    $order_ids['order1_id'] = $this->executeRequest('SELECT hero'.$order['order1'].'_id AS hero_id FROM hands WHERE  hand_id='.$user_hand->hand_id)[0];
    $order_ids['order2_id'] = $this->executeRequest('SELECT hero'.$order['order2'].'_id AS hero_id FROM hands WHERE  hand_id='.$user_hand->hand_id)[0];
    $order_ids['order3_id'] = $this->executeRequest('SELECT hero'.$order['order3'].'_id AS hero_id FROM hands WHERE  hand_id='.$user_hand->hand_id)[0];
    $order_ids['order4_id'] = $this->executeRequest('SELECT hero'.$order['order4'].'_id AS hero_id FROM hands WHERE  hand_id='.$user_hand->hand_id)[0];
    $order_ids['order5_id'] = $this->executeRequest('SELECT hero'.$order['order5'].'_id AS hero_id FROM hands WHERE  hand_id='.$user_hand->hand_id)[0];

    return $order_ids;
  }

  /**
   * Sets the order for user's hand
   * @param user_hand, a user hand
   * @param order_ids, array containing heroes'id in the right order
   */
  public function setOrder($user_hand, $order_ids)
  {
    $this->executeRequest('UPDATE hands SET hero1_order=' . $order_ids['order1_id']->hero_id);
    $this->executeRequest('UPDATE hands SET hero2_order=' . $order_ids['order2_id']->hero_id);
    $this->executeRequest('UPDATE hands SET hero3_order=' . $order_ids['order3_id']->hero_id);
    $this->executeRequest('UPDATE hands SET hero4_order=' . $order_ids['order4_id']->hero_id);
    $this->executeRequest('UPDATE hands SET hero5_order=' . $order_ids['order5_id']->hero_id);
  }
} 