<?php

// $tasks = $query->selectAll('todos');

// require 'views/index.view.php';


$users = $app['database']->selectAll('users');

require 'views/index.view.php';