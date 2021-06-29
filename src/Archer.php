<?php

namespace Lufia;

class Archer extends Unit
{

    protected $damage = 20;

    public function attack(Unit $opponent)
    {
        show(
            "<p>{$this->name} dispara una flecha a {$opponent->getName()}</p>"
        );

        $opponent->takeDamage($this->damage);
    }
}
