<?php

namespace Lufia\Interfaces;

use Lufia\Attack;

abstract class Armor
{
    public function absorbDamage(Attack $attack)
    {
        if($attack->isMagical()) {
            return $this->absorbPMagicalDamage($attack);
        }

        return $this->absorbPhysicalDamage($attack);
    }

    public function absorbPhysicalDamage(Attack $attack)
    {
        return $attack->getDamage();
    }

    public function absorbPMagicalDamage(Attack $attack)
    {
        return $attack->getDamage();
    }

}
