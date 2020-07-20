<?php

session_start();
require_once DIR. '/vendor/autoload.php';

if (file_exists(DIR . '/.env')) {
    $dotenv = \Dotenv\Dotenv::createImmutable(DIR);
    $dotenv->load();
}

echo $_ENV["MESSAGE"];