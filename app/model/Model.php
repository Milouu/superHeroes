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
      $this->db = new PDO('mysql:host=localhost;dbname=monblog;charset=utf8', root, '');
    }
    return $this->db;
  }
}