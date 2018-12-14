#!/usr/bin/env php
<?php
require_once __DIR__ . '/vendor/autoload.php';
use Symfony\Component\Console\Application;
use WebUndMobile\SymfonyConsoleDemo\Commands\GeneratePasswordsCommand;

$app = new Application('Symfony Console Demo', '1.0.0');
$app->add(new GeneratePasswordsCommand());
$app->run();
