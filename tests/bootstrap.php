<?php
//require_once 'vendor/autoload.php';
require_once 'vendor/codeception/codeception/autoload.php';

\Robo\Robo::createDefaultContainer(
    new Symfony\Component\Console\Input\ArrayInput([]),
    new Symfony\Component\Console\Output\NullOutput()
);
//\Robo\Robo::getContainer()->add('logger', new \Consolidation\Log\Logger(new \Symfony\Component\Console\Output\NullOutput));
