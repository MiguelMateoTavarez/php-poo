<?php

namespace Lufia\Weapons;

use Lufia\Weapons\Bow;
use Lufia\Unit;

class BasicBow extends Bow
{
    protected $damage = 20;

    public function getDescription(Unit $attacker, Unit $opponent)
    {
        show("{$attacker->getName()} dispara una flecha a {$opponent->getName()}");
    }
}