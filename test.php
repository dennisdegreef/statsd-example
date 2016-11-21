<?php

require_once(__DIR__ . '/vendor/autoload.php');

$statsd = new League\StatsD\Client();
$statsd->configure(array(
    'host' => 'collectd',
    'port' => 8125,
    'namespace' => 'example'
));
$statsd->increment('test');


