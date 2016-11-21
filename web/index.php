<?php

use League\Tactician\CommandBus;
use League\StatsD\Client as StatsdClient;
use Link0\Tactician\StatsdMiddleware;

require_once(__DIR__ . '/../vendor/autoload.php');

$timezone = 'Europe/Amsterdam';
date_default_timezone_set($timezone);

$app = new Silex\Application();
$app['command_bus'] = new CommandBus([
    new StatsdMiddleware(new StatsdClient(), 'app.example.'),
]);

$app->get('/', function() {
    return 'Hello world';
});

$app->run();
