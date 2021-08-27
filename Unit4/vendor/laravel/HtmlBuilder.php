<?php

namespace Laravel;

use Closure;

class HtmlBuilder
{   
    use Macroable;
    
    public function hr()
    {
        return '<hr/>';
    }
}
