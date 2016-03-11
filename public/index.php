<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

// define route for /
$app->get('/', function() use($app) {
	return 'Hello Developers\' Academy';
}); 

$app->run();