<?php

class Display 
{

  public static function dd($data){
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
  }

}