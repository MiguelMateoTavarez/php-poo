<?php

namespace Lufia;

use Lufia\Weapons\Bow;

class Archer extends Unit
{
    public function __construct($name, Bow $bow)
    {
        parent::__construct($name, $bow);
    }
}
