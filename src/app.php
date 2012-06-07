<?php
$app = require __DIR__.'/bootstrap.php';

$app->get('/', function () use ($app) {

    return $app['twig']->render('index.twig');
})
->bind('jobs');

return $app;