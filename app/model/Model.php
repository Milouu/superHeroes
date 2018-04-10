<?php 

abstract class Model 
{
  private $db; 

  protected function executeRequest($sql, $params = null) {
    if($params == null) {
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
      try
      {
        $this->db = new PDO('mysql:dbname='.$_ENV['DB_NAME'].';host='.$_ENV['DB_HOST'].';port='.$_ENV['DB_PORT'], $_ENV['DB_USER'], $_ENV['DB_PASS']);
        $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
      }
      catch(Exception $e)
      {
        echo("Erreur : " . $e->getMessage() . "<br />");
        echo("N° : " . $e->getCode());
      }
    }
    return $this->db;
  }
}