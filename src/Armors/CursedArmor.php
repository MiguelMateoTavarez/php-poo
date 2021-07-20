<?php

namespace Lufia\Armors;

use Lufia\Interfaces\Armor;
use Lufia\Attack;

class CursedArmor extends Armor
{
    public function absorbDamage(Attack $attack)
    {
        return $attack->getDamage() * 2;
    }
}
