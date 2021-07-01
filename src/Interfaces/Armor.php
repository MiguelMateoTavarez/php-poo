<?php

namespace Lufia\Interfaces;

use Lufia\Attack;

interface Armor
{
    public function absorbDamage(Attack $attack);
}
