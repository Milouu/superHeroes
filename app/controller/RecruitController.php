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
    $errorMessage = '';

    if (!isset($_POST['selections']) || count($_POST['selections']) != 5)
    {
      $errorMessage = 'Please select 5 heroes';
    }

    $selections = $_POST['selections'];
    $totalPrice = 0;
    foreach ($selections as $selectedHero)
    {
      $detailedHero = $this->hero->getHero($selectedHero);
      $totalPrice += $detailedHero[0]->average * 10;
    }

    if ($totalPrice > 3500)
    {
      $errorMessage = 'Your heroes cost ' . $totalPrice . ' RP, but you only have 3500 RP';
    }

    if (strlen($errorMessage) > 0)
    {
      // Get heroes from database
      $heroes = $this->hero->getHeroes(isset($_POST['sorting']) ? $_POST['sorting'] : 'average');

      // Display error message
      $_POST['error'] = $errorMessage;
      $view = new View('Recruit');
      $view->generate(array('heroes' => $heroes));
    }
    else
    {
      $handData = array(
        'league_id' => $_GET['league_id'],
        'user_id' => $_SESSION['user_id']
      );

      // Prepare saving hand to database
      for ($i = 0; $i < 5; $i++)
      {
        $handData['hero' . strval($i + 1) . '_id'] = $selections[$i];
        $handData['hero' . strval($i + 1) . '_order'] = $selections[$i];
      }

      // Save hand to database
      $this->hero->setHand($handData);

      // Redirect to dashboard
      header('Location: index.php?action=dashboard&league_id=' . $_GET['league_id']);
    }
  }
}