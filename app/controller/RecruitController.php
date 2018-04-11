<?php

require_once 'model/Hero.php';
require_once 'view/View.php';

class RecruitController
{

  private $hero;

  public function __construct()
  {
    $this->hero = new Hero();
  }

  // Prepare recruitment page
  public function recruit() 
  {
    $heroes = $this->hero->getHeroes(isset($_POST['sorting']) ? $_POST['sorting'] : 'average');

    $view = new View('Recruit');
    $view->generate(array('heroes' => $heroes));
  }

  // Check if user recruitments are valid
  public function tryRecruit()
  {
    if (isset($_POST['selections'])) {
      $selections = $_POST['selections'];
      // Call function to save to DB
      foreach ($selections as $selectedHero) {
        $detailedHero = $this->hero->getHero($selectedHero);
        $purchaseData = array(
          'hero_id' => $selectedHero,
          'league_id' => $_GET['league_id'],
          'user_id' => $_SESSION['user_id'],
          'price' => $detailedHero[0]->average
        );
        $this->hero->buyHero($purchaseData);
      }
    } else {
      $view = new View('Recruit');
      $view->generate(array('heroes' => $heroes));
    }
  }
}