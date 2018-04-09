<?php

class View
{
  private $file;  
  private $data;

  public function __construct($action)
  {
    $this->file = 'view/view' . $action . '.php';
  }

  public function generate($data = array())
  {
    $contenu = $this->generateFile($this->file, $data);

    $view = $this->generateFile('view/template.php', array('title' => $this->title, 'contenu' => $contenu));

    echo $view;
  }
  
  private function generateFile($file, $data)
  {
    if(file_exists($file))
    {
      extract($data);
      
      ob_start();
      
      require $file;
      
      return ob_get_clean();
    }
    else
    {
      throw new Exception("File '$file' not found.");
    }
  }
}