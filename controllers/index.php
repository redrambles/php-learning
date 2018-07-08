<?php

// $tasks = $query->selectAll('todos');

// require 'views/index.view.php';


$users = App::get('database')->selectAll('users');

require 'views/index.view.php';