<?php
// HomeController, controls the home page and other (root) pages
class HomeController extends Controller
{
  public function __construct() {
  }

  public function index() {
    $data = ['title' => 'Home'];
    $this->view('pages/home', $data);
  }

  public function about() {
    $data = ['title' => 'About'];
    $this->view('pages/about', $data);
  }
}
