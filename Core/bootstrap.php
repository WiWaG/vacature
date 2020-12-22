<?php

require 'vendor/autoload.php';

session_start();

$dotenv = \Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
$dotenv->load();

require 'Core/core.php';

$msg = new \Plasticbrain\FlashMessages\FlashMessages();

$msg->display();