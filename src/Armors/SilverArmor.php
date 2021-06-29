<?php

namespace Lufia\Armors;

use Lufia\Interfaces\Armor;

class SilverArmor implements Armor
{
    public function absorbDamage($damage)
    {
        return $damage / 3;
    }
}
