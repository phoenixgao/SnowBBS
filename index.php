<?php
require 'vendor/autoload.php';
require 'app/config.php';

$app = new \Slim\Slim();

require 'app/routes/login.php';
require 'app/routes/homepage.php';

$app->get('/hello/:name(/)', function ($name) {
    echo "Hello, $name";
});

$app->run();