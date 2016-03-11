<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../models/Task.php';

$app = new Silex\Application();

// switch on debug mode to make it easier to see what is going on in the browser
$app['debug'] = true;

// define route for /
$app->get('/', function() use($app) {

	// creates a new object instance of Task and puts it into $task
	$task = new Task();

	// get the message from the Task object
	$message = $task->getMessage();

	// display the View
	require_once (__DIR__ . '/../views/index.phtml');

	return "";
}); 

$app->run();