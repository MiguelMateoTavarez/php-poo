<?php

namespace Lufia\Weapons;

use Lufia\Weapon;
use Lufia\Unit;

class BasicSword extends Weapon
{
    protected $damage = 2;

    public function getDescription(Unit $attacker, Unit $opponent)
    {
        show("{$attacker->getName()} dispara una flecha a {$opponent->getName()}");
    }
}