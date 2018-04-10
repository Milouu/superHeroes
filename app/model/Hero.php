<?php

require_once 'Model.php';

class Hero extends Model
{
  public function getHeroes()
  {

    // Check if heroes list is cached already
    $heroesCachePath = './cache/heroes.txt';

    if (file_exists($heroesCachePath))
    {
      // From cache
      echo 'from cache </b>';
      $results = file_get_contents($heroesCachePath);
      $results = json_decode($results);
    }
    else
    {
      // From API
      echo 'from API </br>';
      $results = array();
  
      for($i = 1; $i < 3; $i++)
      {
        $result = file_get_contents('http://superheroapi.com/api/'. $_ENV['API_KEY'] .'/'. $i);
    
        // Json decode
        $result = json_decode($result);
    
        array_push($results, $result);
      }

      // Cache results for future visits
      file_put_contents($heroesCachePath, json_encode($results));
    }

    return $results;
  }
}