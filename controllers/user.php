<?php

$message = "User page";

// Init view
$view = new View();
// Set title
$view->title('User');
// Set data
$view->set('message',  $message);
// Render view
$view->render('user');