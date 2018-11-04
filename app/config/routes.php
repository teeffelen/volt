<?php
$routes = array();
$routes['#^/$#i']           = array('controller' => 'home', 'action' => 'index');
$routes['#^/home$#i']       = array('controller' => 'home', 'action' => 'index');
$routes['#^/about$#i']      = array('controller' => 'home', 'action' => 'about');
$routes['#^/post/(.*)$#i']  = array('controller' => 'post', 'action' => 'index');
