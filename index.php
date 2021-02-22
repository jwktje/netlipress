<?php
/**
 * CONFIG
 */
define('APP_ROOT', __DIR__);
define('DEBUG', true);

/**
 * COMPOSER
 */
require __DIR__ . '/vendor/autoload.php';

/**
 * INIT
 */
$app = new Netlipress\Application();
