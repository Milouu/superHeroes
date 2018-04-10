<?php

require_once 'model/Model.php';
require_once 'model/User.php';
require_once 'view/View.php';

class SignupController 
{
  private $errorMessages;
  private $successMessage;
  private $user;

  public function __construct()
  {
    $this->errorMessages = [];
    $this->successMessage = '';
    $this->user = new User();
  }

  public function signup()
  {
    $view = new View('Signup');
    $view->generate(array('errorMessages' => $this->errorMessages, 'successMessage' => $this->successMessage));
  }

  public function trySignup()
  { 
    // Form sent
    if(!empty($_POST))
    {
      $name = $_POST['name'];
      $password = $_POST['password'];
      $mail = $_POST['mail'];
    
      // Handling errors
      if(empty($name))
      {
        $this->errorMessages['name'] = 'Missing name';
      }
      else if(strlen($name) < 4)
      {
        $this->errorMessages['name'] = 'Name is too short';
      }
    
      if(empty($password))
      {
        $this->errorMessages['password'] = 'Missing password';
      }
      else if(strlen($password) < 4)
      {
        $this->errorMessages['password'] = 'Password is too short';
      }

      if(empty($mail))
      {
        $this->errorMessages['mail'] = 'Missing email';
      }
      else if(!preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $mail))
      {
        $this->errorMessages['mail'] = 'Please enter a valid email';
      }
    
      if(empty($this->errorMessages))
      {
        $data = [
          "user_name" => $name,
          "user_password" => $password,
          "user_mail" => $mail
        ];

        $this->user->addUser($data);
    
        $this->successMessage = 'Inscription successful';
    
        // Empty POST
        $_POST['name'] = '';
        $_POST['password'] = '';
        $_POST['mail'] = '';
      }
    }
    
    // Form not sent
    else
    {
      $_POST['name'] = '';
      $_POST['password'] = '';
      $_POST['mail'] = '';
    }
  }
}