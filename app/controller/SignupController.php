<?php

require_once 'model/Model.php';
require_once 'view/View.php';

class SignupController 
{
  public function signup()
  {
    $view = new View('Signup');
    $view->generate();
  }

  public function trySignup()
  {
    $errorMessages = [];
    $successMessage = '';
    
    // Form sent
    if(!empty($_POST))
    {
      $name = $_POST['name'];
      $password = $_POST['password'];
      $mail = $_POST['mail'];
    
      // Handling errors
      if(empty($name))
      {
        $errorMessages['name'] = 'Missing name';
      }
      else if(strlen($name) < 4)
      {
        $errorMessages['name'] = 'Name is too short';
      }
    
      if(empty($password))
      {
        $errorMessages['password'] = 'Missing password';
      }
      else if(strlen($password) < 4)
      {
        $errorMessages['password'] = 'Password is too short';
      }

      if(empty($mail))
      {
        $errorMessages['mail'] = 'Missing email';
      }
      else if(!preg_match('/[a-zA-Z0-9_-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/', $mail))
      {
        $errorMessages['mail'] = 'Please enter a valid email';
      }
    
      if(empty($errorMessages))
      {
         // Prepares INSERT INTO values
         $prepare = $pdo->prepare('
         INSERT INTO 
           expenses (user_name, user_password, user_mail)
         VALUES
           (:user_name, :user_password, :user_mail)
       ');
    
        // Binds values to form data
        $prepare->bindValue('user_name', $name);
        $prepare->bindValue('user_password', $password);
        $prepare->bindValue('user_mail', $mail);
    
        // Execute the insert
        $prepare->execute();
    
        $successMessage = 'Expense successfully added';
    
        // Empty POST
        $_POST['name'] = '';
        $_POST['amount'] = '';
      }
    }
    
    // Form not sent
    else
    {
      $_POST['name'] = '';
      $_POST['amount'] = '';
    }
  }
}