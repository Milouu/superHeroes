<?php

require_once '../vendor/autoload.php';

use Symfony\Component\Finder\Finder;

$finder = new Finder();
$finder->in(__DIR__);

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load('../.env');