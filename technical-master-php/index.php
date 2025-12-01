<?php

require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\NativeMailerHandler;

$logger = new Logger('my_logger');
$streamHandler = new StreamHandler('/tmp/phpbook/test.log', Logger::WARNING);
$logger->pushHandler($streamHandler);

try {
  throw new Exception('例外が発生しました');
} catch (Exception $e) {
  $logger->error($e->getMessage());
}