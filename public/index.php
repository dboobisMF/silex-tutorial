<?php

// public/index.php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

// ... definitions

$app->get('/', function() use($app) {
	return 'Hello Developers\' Academy';
});

$app->run();
