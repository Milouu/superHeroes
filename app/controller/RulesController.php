<?php

require_once 'view/View.php';

class RulesController
{
  public function rules() 
  {
    $view = new View('Rules');
    $view->generate();
  }
}