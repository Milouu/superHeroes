<?php 

abstract class Model 
{
  private $db; 

  /**
   * Executes an sql request
   * @param sql, string containing the sql request
   * @param params, array null by default containing possible variables for prepare
   * @return result of the sql request
   */
  protected function executeRequest($sql, $params = null) 
  {
    if(substr($sql, 0, 6) == 'SELECT')
    {
      $result = $this->getDb()->query($sql);
      return $result->fetchAll();
    }
    else if($params == null) {
      $result = $this->getDb()->exec($sql);
    }
    else
    {
      $result = $this->getDb()->prepare($sql);
      $result->execute($params);
    }
    return $result;
  }

  /**
   * Gets the last id inserted into database
   * @return id 
   */
  protected function getLastId()
  {
    return $this->getDb()->lastInsertId();
  }

  /**
   * Handles connection with the database
   * @return object pdo
   */
  private function getDb()
  {
    if($this->db == null)
    {
      try
      {
        // $this->db = new PDO('mysql:dbname='.$_ENV['DB_NAME'].';host='.$_ENV['DB_HOST'].';port='.$_ENV['DB_PORT'], $_ENV['DB_USER'], $_ENV['DB_PASS']);
        $this->db = new PDO('mysql:dbname='.DB_NAME.';host='.DB_HOST.';port='.DB_PORT, DB_USER, DB_PASS);
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