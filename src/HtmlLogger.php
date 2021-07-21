<?php

namespace Lufia;

use Lufia\Interfaces\Logger as InterfacesLogger;

class HtmlLogger implements InterfacesLogger
{
    public function info($message)
    {
        echo "<p>$message</p>";
    }
}