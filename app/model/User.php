<?php

require_once 'Model.php';

class User extends Model 
{
  /**
   * Adds a user
   * @param data, array containing variables for prepare
   */
  public function addUser($data)
  {
   $this->executeRequest('INSERT INTO users (user_name, user_password, user_mail) VALUES (:user_name, :user_password, :user_mail)', $data);
  }

  /**
   * Gets all users
   * @return array containing users
   */
  public function getUsers()
  {
    return $this->executeRequest('SELECT * FROM users');
  }

  /**
   * Gets users'name given their id,
   * @param user_ids, ids from users
   * @return array containing the names from users
   */
  public function getUserNames($user_ids)
  {
    $user_names = [];

    foreach($user_ids as $user_id)
    {
      array_push($user_names, $this->executeRequest('SELECT user_name FROM users WHERE user_id=' . $user_id->user_id));
    }
    return $user_names;
  }

  /**
   * Disconnect a user and redirect to homepage
   */
  public function deconnection()
  {
    session_destroy();
    header('Location: index.php');
  }
}