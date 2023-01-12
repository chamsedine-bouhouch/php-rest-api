<?php
require __DIR__ . '/vendor/autoload.php';

use Bouhouch\PhpRestApi\Lib\Config;
use Bouhouch\PhpRestApi\Lib\Logger;
use Bouhouch\PhpRestApi\Models\User;

$user =new User();
echo $user->name;

// test Config
echo Config::get('LOG_PATH');

// test logger
Logger::enableSystemLogs();
$logger = Logger::getInstance();
$logger->info('Hello World');