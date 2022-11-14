<?php

$message = "Welcome to this app!";

// Init view
$view = new View();
// Set title
$view->title('Dashboard');
// Set data
$view->set('message',  $message);
// Render view
$view->render('dashboard');