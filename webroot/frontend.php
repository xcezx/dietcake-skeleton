<?php
$loader = require dirname(__DIR__) . '/vendor/autoload.php';
$loader->add('', dirname(__DIR__) . '/applications/frontend/controllers');
$loader->add('', dirname(__DIR__) . '/applications/frontend/models');

define('DC_ACTION', 'dc_action');
define('VIEWS_DIR', dirname(__DIR__) . '/applications/frontend/views/');

Dispatcher::invoke();
