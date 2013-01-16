<?php 
# Include Slim 
require 'Slim/Slim.php';
# Register autoloader
\Slim\Slim::registerAutoloader();
# Create app
$app = new \Slim\Slim();

# Config
$app->config(array(
   'templates.path' => './templates'
));

$config = require 'config/config.php';
$config = json_encode($config);
$config = json_decode($config);
# print_r($config);

# ROUTES

// GET route for /

$app->get('/', function() use ($app, $config) {
	
	$data = array(
		'config' => $config,
		'template' => 'home.php'
   );	
	$app->render('layout.php', $data);
});

$app->get('/page/:template', function ($template = null) use ($app, $config) {
    
    $data = array(
       'config' => $config,
       'template' => $template
   );	
	$app->render('layout.php', $data);
});



# Finally, run app
$app->run();
 ?>