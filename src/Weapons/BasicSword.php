<?php

namespace Lufia\Weapons;

use Lufia\Weapon;

class BasicSword extends Weapon
{
    protected $damage = 20;
    protected $magical = false;
    protected $description = ':unit ataca con la espada a :opponent';
}