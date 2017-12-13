# RawPhpView

A minimal php view service for raw php

## install

Open a terminal, go to your project directory and type:

    composer require jibundeyare/raw-php-view

## views directory

It is recommended to create a separate directory to store the views.

In the examples, we use the following directory structure:

    project/
      public/
        index.php
      templates/
        hello.php
      vendor/

## usage

    // public/index.php
    use RawPhpView\ViewService;

    require __DIR__.'/../vendor/autload.php';

    $path = __DIR__.'/../templates';
    $view = new ViewService($path);

    $greeting = 'Hello!';

    echo $view->render('hello.php', [
        'greeting' => $greeting,
    ]);

    // templates/hello.php
    echo $greeting;

