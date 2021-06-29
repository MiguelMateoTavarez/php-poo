<?php

namespace Lufia;

use WarCraft\Armor as WarcraftArmor;

class SilverArmor implements WarcraftArmor
{
    public function absorbDamage($damage)
    {
        return $damage / 3;
    }
}
