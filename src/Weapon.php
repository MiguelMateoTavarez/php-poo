<?php

namespace Lufia;

abstract class Weapon
{

    protected $damage = 0;
    protected $magical = false;

    public function createAttack()
    {
        return new Attack($this->damage, $this->magical, $this->getDescriptionKey());
    }

    protected function getDescriptionKey()
    {
        return str_replace('Lufia\Weapons\\', '', get_class($this).'Attack');
    }
}
