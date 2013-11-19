<?php
// 登录
$app->get('/login(/)', $actionLogin = function () use ($app) {
    $app->render('login.tpl.php');
});