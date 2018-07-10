<?php

App::bind('config', require 'config.php');

//Display::dd(App::get('config'));

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

function view($name, $data = [])
{
    extract($data);

    return require "views/{$name}.view.php";
}

function redirect($path)
{

    return header('Location: /{$path}');

}