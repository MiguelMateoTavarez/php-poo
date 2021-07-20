<?php

namespace Lufia\Armors;

use Lufia\Interfaces\Armor;
use Lufia\Attack;

class BronzeArmor extends Armor
{
    public function absorbDamage(Attack $attack)
    {
        return $attack->getDamage() / 2;
    }
}
