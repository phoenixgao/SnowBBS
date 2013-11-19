<?php
// 默认登录
$app->get('(/)', function() use ($actionLogin) {
    $actionLogin();
});
