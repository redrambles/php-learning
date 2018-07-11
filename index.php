<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\Core\Router;
use App\Core\Request;



echo '<h1>This is Index!</h1>';


Router::load('app/routes.php')
  ->direct(Request::uri(), Request::method());
