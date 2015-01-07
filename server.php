<?php
//To be used with the PHP interal server.
//This is for experimental use.

//Get the Request
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

//Removes weird encoding from the URL
$uri = urldecode($uri);

//Points the URI to the Public directory
$requested = '/public/'.$uri;

//If the requested URI exist, cancels out and serves it.
if ($uri !== '/' and file_exists($requested))
{
  return false;
}

//Every request goes through index.php
require_once 'public/index.php';
