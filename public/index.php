<?php
require_once(__DIR__ . '/../config/netlipress.php');
require_once(__DIR__ . '/../vendor/autoload.php');
$app = new Netlipress\Application();
$app->run();
