<?php
// PostController, example of a custom controller handling random ID's
class PostController extends Controller
{
  public function __construct() {
  }

  public function index($id) {
    $data = [
      'title' => 'Post '.$id,
      'id'    => $id
    ];
    $this->view('post/home', $data);
  }
}
