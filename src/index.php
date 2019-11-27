<?php
session_start();
ini_set('display_errors', true);
error_reporting(E_ALL);

// basic .env file parsing
if (file_exists("../.env")) {
  $variables = parse_ini_file("../.env", true);
  foreach ($variables as $key => $value) {
    putenv("$key=$value");
  }
}

$routes = array(
  'home' => array(
    'controller' => 'Posts',
    'action' => 'index'
  ),
  'addPost1' => array(
    'controller' => 'Posts',
    'action' => 'addPost1'
  ),
  'addPost2' => array(
    'controller' => 'Posts',
    'action' => 'addPost2'
  ),
  'addPost3' => array(
    'controller' => 'Posts',
    'action' => 'addPost3'
  ),
  'addPost4' => array(
    'controller' => 'Posts',
    'action' => 'addPost4'
  ),
  'addPost5' => array(
    'controller' => 'Posts',
    'action' => 'addPost5'
  ),
  'login' => array(
    'controller' => 'Posts',
    'action' => 'login'
  ),

  'fbcallback' => array(
    'controller' => 'Posts',
    'action' => 'fbcallback'
  ),
);

if(empty($_GET['page'])) {
  $_GET['page'] = 'home';
}
if(empty($routes[$_GET['page']])) {
  header('Location: index.php');
  exit();
}

$route = $routes[$_GET['page']];
$controllerName = $route['controller'] . 'Controller';

require_once __DIR__ . '/controller/' . $controllerName . ".php";

$controllerObj = new $controllerName();
$controllerObj->route = $route;
$controllerObj->filter();
$controllerObj->render();
