<?php 

abstract class Model 
{
  private $db; 

  protected function executeRequest($sql, $params = null) {
    if($params = null) {
      $result = $this->getDb()->query($sql);
    }
    else
    {
      $result = $this->getDb()->prepare($sql);
      $result->execute($params);
    }
    return $result;
  }

  private function getDb()
  {
    if($this->db == null)
    {
      $this->db = new PDO('mysql:dbname='.$_ENV['DB_NAME'].';host='.$_ENV['DB_HOST'].'charset=utf8;port='.$_ENV['DB_PORT'], $_ENV['DB_USER'], $_ENV['DB_PASS']);
    }
    return $this->db;
  }
}