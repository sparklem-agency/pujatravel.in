<?php

use Dotenv\Dotenv;

require __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();
require __DIR__ . '/src/helpers.php';
require __DIR__ . '/src/routes.php';
