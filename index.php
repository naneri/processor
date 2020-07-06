<?php

require "vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();

$processor = new App\Processor();

$processor->process();