<?php

namespace Lufia\Weapons;

use Lufia\Weapons\Bow;
use Lufia\Unit;

class CrossBow extends Bow
{
    protected $damage = 40;

    public function getDescription(Unit $attacker, Unit $opponent)
    {
        show("{$attacker->getName()} dispara una flecha a {$opponent->getName()}");
    }
}