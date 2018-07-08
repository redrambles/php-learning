<?php 

echo('You typed ' . $_POST['name']);

App::get('database')->insert('users', [
    'name' => $_POST['name']
]);

header('Location: /');