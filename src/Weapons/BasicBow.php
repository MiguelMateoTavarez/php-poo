<?php

namespace Lufia\Weapons;

use Lufia\Weapon;

class BasicBow extends Weapon
{
    protected $damage = 20;
    protected $magical = false;
    protected $description = ':unit dispara una flecha a :opponent';
    
}
