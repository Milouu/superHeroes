<?php

class View
{
  private $file;  
  private $data;

  public function __construct($action)
  {
    $this->file = 'view/view' . $action . '.php';
  }

  /**
   * Generates a view given data acquired from database
   * @param data, array empty by default, possibly containing data from database used to create a page
   */
  public function generate($data = array())
  {
    $contenu = $this->generateFile($this->file, $data);

    $view = $this->generateFile('view/template.php', array('title' => $this->title, 'contenu' => $contenu));

    echo $view;
  }
  
  /**
   * Generates a page from the given data if the view exists
   * @param file, name of the view
   * @param data, data passed from database
   */
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