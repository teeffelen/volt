<?php

//Load config
require_once ('../app/config/config.php');
require_once ('../app/config/routes.php');

//Autoload Controllers
function __autoload($classname) {
  require_once '../app/controllers/'.$classname.'.php';
}

$url = '/';
if (isset($_GET['url'])) {
  $url .= $_GET['url'];
}

// run dispatcher
$routed = false;
foreach ($routes as $route_regex => $path) {
  $matches = array();
  if (preg_match($route_regex, $url, $matches)) {
    $route = $path;
    $routed = true;
    break;
  }
}

if (!$routed) {
  Controller::error();
  exit;
}

$controller = ucfirst($route['controller']) . 'Controller';
$action = $route['action'];
$params = array();
if (isset($matches[1])) {
  $params['id'] = $matches[1];
}

$dispatch = new $controller();

if ((int)method_exists($controller, $action)) {
  call_user_func_array(array($dispatch, $action), $params);
} else {
  Controller::error();
  exit;
}
