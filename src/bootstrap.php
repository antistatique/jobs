<?php

require_once __DIR__.'/../vendor/autoload.php'; 

use Silex\Provider\TwigServiceProvider;
use Silex\Provider\UrlGeneratorServiceProvider;

$app = new Silex\Application(); 

$app['debug'] = true;

// Load configuration
$app->register(new TwigServiceProvider(), array(
    'twig.path'         => __DIR__.'/../views',
    'twig.options'      => array(
        'cache' => __DIR__.'/../cache/twig',
        'debug' => $app['debug']
    ),
));

$app->register(new UrlGeneratorServiceProvider());

return $app;