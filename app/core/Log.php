<?php

namespace App\Core;

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

trait Log
{
    function logMe($logName, $logMessages) {

        $logPath = LOG_PATH; // move logs outside /public
        $logger = new Logger($logName);
        $logger->pushHandler(new StreamHandler($logPath, Level::Info));
    
        foreach ($logMessages as $logMessage) {
            $logger->info($logMessage);
        }
    }
}