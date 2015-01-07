<?php

$app->get('/', function () use ($app) {
  $app->render('home');
  //$app->log->info("Skeleton '/' route");
});
