<?php

require 'vendor/autoload.php';

echo '<h1>This is Index!</h1>';

$query = require 'core/bootstrap.php';
// $router = new Router;
// require 'routes.php';

//dd($_SERVER);

$uri = (trim($_SERVER['REQUEST_URI'], '/'));

Router::load('routes.php')
  ->direct(Request::uri(), Request::method());
