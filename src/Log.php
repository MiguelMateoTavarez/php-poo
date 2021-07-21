<?php

namespace Lufia;

use Lufia\Interfaces\Logger as InterfacesLogger;

class Log
{
    protected static $logger;

    public static function setLogger(InterfacesLogger $logger)
    {
        static::$logger = $logger;
    }

    public static function info($message)
    {
        static::$logger->info($message);
    }
}