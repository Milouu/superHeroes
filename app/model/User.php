<?php

require_once 'Model.php';

class User extends Model 
{
  public function addUser($data)
  {
   $this->executeRequest('INSERT INTO users (user_name, user_password, user_mail) VALUES (:user_name, :user_password, :user_mail)', $data);
  }

  public function getUsers()
  {
    return $this->executeRequest('SELECT * FROM users');
  }
}