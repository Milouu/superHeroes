<?php

require_once 'Model.php';

class Hand extends Model
{
  public function getHand($user_id, $league_id)
  {
    return $this->executeRequest('SELECT * FROM hands WHERE user_id=' . $user_id .' AND league_id=' . $league_id);
  }

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

  public function setOrder($user_hand, $order_ids)
  {
    $this->executeRequest('UPDATE hands SET hero1_order=' . $order_ids['order1_id']->hero_id);
    $this->executeRequest('UPDATE hands SET hero2_order=' . $order_ids['order2_id']->hero_id);
    $this->executeRequest('UPDATE hands SET hero3_order=' . $order_ids['order3_id']->hero_id);
    $this->executeRequest('UPDATE hands SET hero4_order=' . $order_ids['order4_id']->hero_id);
    $this->executeRequest('UPDATE hands SET hero5_order=' . $order_ids['order5_id']->hero_id);
  }
}