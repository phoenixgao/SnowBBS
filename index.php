<?php
require 'vendor/autoload.php';
require 'app/config.php';

$app = new \Slim\Slim(array(
    'templates.path' => './templates',
));

// Create monolog logger and store logger in container as singleton 
// (Singleton resources retrieve the same log resource definition each time)
$app->container->singleton('log', function () {
    $log = new \Monolog\Logger('marschen');
    $log->pushHandler(new \Monolog\Handler\StreamHandler('./app/logs/app.log', \Psr\Log\LogLevel::DEBUG));
    return $log;
});

// Prepare view
$app->view(new \Slim\Views\Twig());
$app->view->parserOptions = array(
    'charset' => 'utf-8',
    'cache' => realpath('./templates/cache'),
    'auto_reload' => true,
    'strict_variables' => false,
    'autoescape' => true
);
$app->view->parserExtensions = array(new \Slim\Views\TwigExtension());

require 'app/module_portal/route.php';

$app->run();