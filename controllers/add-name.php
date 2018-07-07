<?php 

echo('You typed ' . $_POST['name']);

$app['database']->insert('users', [
    'name' => $_POST['name']
]);

header('Location: /');