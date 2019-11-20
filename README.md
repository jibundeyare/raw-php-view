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

Create a PHP template file `templates/hello.php` :

    <!-- templates/hello.php -->
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title><?php echo $greeting; ?></title>
        </head>
        <body>
            <h1><?php echo $greeting; ?></h1>
        </body>
    </html>

Create a PHP script file `public/index.php` :

    <?php
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

In your terminal, start a web server :

    php -S localhost:8000 -t public

And enjoy the result : [http://localhost:8000](http://localhost:8000).

