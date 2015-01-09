<?php date_default_timezone_set('UTC');

/**
 * Composer autoloader
 */
require_once __DIR__.'/../vendor/autoload.php';

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
  'templates.path' => __DIR__.'/../resources/templates',
));

// Create monolog logger and store logger in container as singleton
$app->container->singleton('log', function () {
  $log = new \Monolog\Logger('lagseeing-skeleton');
  $log->pushHandler(new \Monolog\Handler\StreamHandler(__DIR__.'/../src/logs/app.log', \Monolog\Logger::DEBUG));
  return $log;
});

// Using blade for templating
$view = $app->view();
$view->parserOptions = array(
  'debug' => true,
  'cache' => __DIR__.'/../src/cache'
);

//Routes file
include __DIR__.'/../app/routes.php';

//Bootstrap Slim
$app->run();
