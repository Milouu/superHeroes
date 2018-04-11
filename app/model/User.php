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

  public function getUserNames($user_ids)
  {
    $user_names = [];

    foreach($user_ids as $user_id)
    {
      array_push($user_names, $this->executeRequest('SELECT user_name FROM users WHERE user_id=' . $user_id->user_id));
    }
    return $user_names;
  }

  public function deconnection()
  {
    session_destroy();
    header('Location: index.php');
  }
}