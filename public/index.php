<?php

/**
 * Composer autoloader
 */
require_once '../vendor/autoload.php';

/**
 * Load .env file
 */
if (file_exists(__DIR__.'/../.env'))
{
  Dotenv::load(__DIR__.'/../');
}

//New Instance of Slim
$app = new \Slim\Slim(array(
  'view' => new \Slim\Views\Blade(),
  'templates.path' => '../resources/templates',
));

// Create monolog logger and store logger in container as singleton
$app->container->singleton('log', function () {
  $log = new \Monolog\Logger('lagseeing-skeleton');
  $log->pushHandler(new \Monolog\Handler\StreamHandler('../storage/logs/app.log', \Monolog\Logger::DEBUG));
  return $log;
});

// Using blade for templating
$view = $app->view();
$view->parserOptions = array(
  'debug' => true,
  'cache' => '../storage/cache'
);

//Routes file
include '../src/routes.php';

//Bootstrap Slim
$app->run();
