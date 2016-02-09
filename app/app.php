<?php
    require_once __DIR__."/../vendor/autoload.php";

    $app = new Silex\Application();

    $app->get("/", function() {
      $message = strtoupper("oh hey");
      return "<html><head></head><body><a href='/goodbye'>Goodbye</a><br>$message";

    });

    $app->get("/goodbye", function(){
      $message = "goodbye";
      return "<html><head></head><body><a href='/'>Oh Hey</a><br>$message";
    });

    return $app;
?>
