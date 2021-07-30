<?php

namespace Lufia\Armors;

use Lufia\Interfaces\Armor;
use Lufia\Attack;

class MissingArmor extends Armor
{
    public function absorbDamage(Attack $attack)
    {
        return $attack->getDamage();
    }
}