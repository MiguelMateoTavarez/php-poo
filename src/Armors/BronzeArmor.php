<?php

namespace Lufia\Armors;

use Lufia\Interfaces\Armor;

class BronzeArmor implements Armor
{
    public function absorbDamage($damage)
    {
        return $damage / 2;
    }
}
