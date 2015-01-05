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

$logger = new \Flynsarmy\SlimMonolog\Log\MonologWriter(array(
  'handlers' => array(
    new \Monolog\Handler\StreamHandler('../storage/logs/'.date('Y-m-d').'.log'),
  ),
));

//New instance of Slim
$app = new \Slim\Slim(array(
  'log.writer' => $logger
));

//Routes file
include '../src/routes.php';

//Bootstrap Slim
$app->run();
