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

//New instance of Slim
$app = new \Slim\Slim();

//Routes file
include '../src/routes.php';

//Bootstrap Slim
$app->run();
