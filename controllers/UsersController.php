<?php

class UsersController
{

  public function index()
  {
    $users = App::get('database')->selectAll('users');

    return view('users', [
      'users' => $users
    ]);
  }

  public function store()
  {
    //insert user associated witht eh request 
    // redirect back to all users
    echo('You typed ' . $_POST['name']);

    App::get('database')->insert('users', [
        'name' => $_POST['name']
    ]);

    return redirect('users');

  }

}