<?php

namespace Lufia\Armors;

use Lufia\Interfaces\Armor;
use Lufia\Attack;

class CursedArmor implements Armor
{
    public function absorbDamage(Attack $attack)
    {
        if($attack->isPhysical()) {
            return $attack->getdamage() * 2;
        }
        
        return $attack->getDamage();
    }
}
