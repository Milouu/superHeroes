<?php

require_once 'view/View.php';

class RulesController
{
  /**
   * Display rules page
   */
  public function rules() 
  {
    $view = new View('Rules');
    $view->generate();
  }
}