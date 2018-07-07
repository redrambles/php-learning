<?php

class Connection {

  public static function make($config)
  {
    try {
  
      return new PDO(
        $config['connection'].';dbname='.$config['name'],
        $config['username'],
        $config['password'],
        $config['options']
      );
      
    } catch(PDOException $e){
      
      die('Could not connect to db, biatch.');
      
    }
  }

}

// This is how we would have called the make function were it public only (and not static)
// $connection = new Connection();
// $connection->make();

// Given that this is a static method, you can call it like this:
// So in times when you don't need an instance of a class, a static method is useful

//$pdo = Connection::make();

