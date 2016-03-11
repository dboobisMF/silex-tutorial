<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../models/Task.php';

$app = new Silex\Application();

// define route for /
$app->get('/', function() use($app) {
	// creates a new object instance of Task and puts it into $task
	$task = new Task();
	// get the message from the Task object
	$message = $task->getMessage();
	require_once (__DIR__ . '/../views/index.phtml');
	return true;
}); 

$app->run();