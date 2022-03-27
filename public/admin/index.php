<?php
require_once(__DIR__ . '/../../config/netlipress.php');
require_once(__DIR__ . '/../../vendor/autoload.php');
new Netlipress\Application();
Netlipress\NetlifyCms::render();
