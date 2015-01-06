<?php

$app->get('/', function () use ($app) {
  echo 'You have arrived';
  //$app->log->info("Skeleton '/' route");
});
