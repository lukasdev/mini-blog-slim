<?php
	require 'vendor/autoload.php';
	$app = new \Slim\Slim();
	$app->container->singleton('db', function(){
		return new PDO('mysql:host=localhost;dbname=blog', 'root', '');
	});

	$view = $app->view();
	$view->setTemplatesDirectory('app/views');
	
	require 'routes.php';
	$app->run();