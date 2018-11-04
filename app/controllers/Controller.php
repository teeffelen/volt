<?php
// Controller, it has the main view() and error() functions to construct views
class Controller
{
  public function __construct() {
  }

  public function view(string $view = '', array $data = []) {
    require('../app/views/includes/header.php');
    require('../app/views/'.$view.'.php');
    require('../app/views/includes/footer.php');
  }

  public function error() {
    $data = ['title' => 'Page Not Found'];
    require('../app/views/includes/header.php');
    require('../app/views/pages/404.php');
    require('../app/views/includes/footer.php');
  }
}
