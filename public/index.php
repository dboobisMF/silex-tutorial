<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

// define route for /
$app->get('/', function() use($app) {
	$message = 'Hello Developers\' Academy';
	include (__DIR__ . '/../views/index.phtml');
	return true;
}); 

$app->run();