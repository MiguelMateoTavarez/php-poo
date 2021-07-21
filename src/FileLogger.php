<?php

namespace Lufia;

use Lufia\Interfaces\Logger as InterfacesLogger;

class FileLogger implements InterfacesLogger
{
    public function info($message)
    {
        file_put_contents(
            __DIR__.'/../storage/log.txt',
            '('.date('Y-m-d H:i:s').') '.$message."\n",
            FILE_APPEND
        );
    }
}