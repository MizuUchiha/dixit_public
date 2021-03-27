<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createMutable(__DIR__);
$dotenv->load();
require_once($_SERVER['DOCUMENT_ROOT'] . '/system/Autoloader.php');