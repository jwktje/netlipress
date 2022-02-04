<?php
define('APP_ROOT', realpath(__DIR__ . '/../'));
define('DEBUG', !defined('NETLIFY')); //Disable debug on deployment
define('SITE_NAME', 'Netlipress');
define('USE_MIX', true);
