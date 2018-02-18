<?php
// include 'autoload.php';

$app = new \Slim\App();

// $app->add(new Core());

// Get container
$container = $app->getContainer();

// Register component on container
$container['view'] = function ($container) {
    return new \Slim\Views\PhpRenderer(dirname(__DIR__) . '/views');
};

include dirname(__DIR__) . '/routes/autoload.php';

// Run app
$app->run();
