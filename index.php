<?php

// DEBUG
// echo "<pre>";
// return  var_dump($_SERVER);

// Define app info
define('APP', 'My App');
define('TITLE', 'My Awesome App');

$request = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO']: "";

// View class
include 'classes/View.php';

// Controllers directory
$controllers_dir = 'controllers/';

// Routes
switch ($request) {
  case '/dashboard':
    include $controllers_dir . 'dashboard.php';
    break;

  case '/user':
    include $controllers_dir . 'user.php';
    break;
  
  default:
    include $controllers_dir . 'dashboard.php';
    break;
}