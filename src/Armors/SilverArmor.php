<?php

namespace Lufia\Armors;

use Lufia\Interfaces\Armor;
use Lufia\Attack;

class SilverArmor implements Armor
{
    public function absorbDamage(Attack $attack)
    {
        if($attack->isPhysical()) {
            return $attack->getdamage() / 3;
        }
        
        return $attack->getDamage();
    }
}
