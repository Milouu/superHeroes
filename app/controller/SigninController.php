<?php

require_once 'model/Model.php';
require_once 'model/User.php';
require_once 'view/View.php';

class SigninController
{
  private $errorMessages;
  private $user;
  private $users;

  public function __construct()
  {
    $this->errorMessages = [];
    $this->successMessage = '';
    $this->user = new User();
    $this->users = $this->user->getUsers();
  }

  public function signin()
  {
    $view = new View('Signin');
    $view->generate(array('errorMessages' => $this->errorMessages, 'successMessage' => $this->successMessage));
  }

  public function trySignin()
  {
    //Form sent
    if(!empty($_POST))
    {  
      if($this->connection_check($_POST['name'], $_POST['password']))
      {
        // $successMessages[] = 'Connection successfull';
        $_SESSION['user'] = $_POST['name'];
        
        // Redirecting to index.php after successfull connection
        header('Location: index.php?action=leagues');
      }
      else
      {
        $errorMessages[] = 'Username and/or password incorrect';
      }
    }
    // Form not sent
    else 
    {
      $_POST['name'] = '';
      $_POST['password'] = '';
    }
  }

  public function connection_check($user_name, $user_password)
  {
    foreach($this->users as $user)
    {
      if($user_name == $user->user_name && password_verify($user_password, $user->user_password))
      {
        $_SESSION['user_id'] = $user->user_id;
        return 1;
      }
    }
    return 0;
  }

  public function logout()
  {
    $this->user->deconnection();
  }
}