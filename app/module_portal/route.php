<?php
$app->get('(/)', function () use ($app) {
    $app->log->info("Slim '/' route");
    
    $app->render('portal/home.html', array('name' => 'Username'));
});