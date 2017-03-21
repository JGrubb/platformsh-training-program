<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->get('/', function() use($app) {
    $items = json_decode(file_get_contents(__DIR__ . '/items.json'));
    return $app->json($items);
});

$app->run();