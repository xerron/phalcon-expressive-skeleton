<?php

use Phalcon\Di\Config;
use Phalcon\Di\Di;

// Load configuration
$config = require __DIR__ . '/config.php';

// Build container
$container = new Di();
(new Config($config['dependencies']))->configureServiceManager($container);

// Inject config
$container->set('config', function() use ($config) {return  $config; }, true);

return $container;
