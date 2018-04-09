<?php

require_once 'Model.php';

class Hero extends Model
{
  public function getHeroes()
  {
    $results = array();

    for($i = 1; $i < 3; $i++)
    {
      $result = file_get_contents('http://superheroapi.com/api/10215446684301563/'. $i);
  
      // Json decode
      $result = json_decode($result);
  
      array_push($results, $result);
    }


    return $results;
  }
}