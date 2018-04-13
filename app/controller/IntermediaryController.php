<?php

require_once 'model/Hand.php';

class IntermediaryController
{

  private $hand;

  public function __construct()
  {
    $this->hand = new Hand();
  }

  public function redirect()
  {
    $user_hand = $this->hand->getHand($_SESSION['user_id'], $_GET['league_id']);

    if(empty($user_hand))
    {
      header('Location: index.php?action=recruit&league_id=' . $_GET['league_id']);
    }
    else
    {
      header('Location: index.php?action=dashboard&league_id=' . $_GET['league_id']);
    }
  }
}