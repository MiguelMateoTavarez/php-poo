<?php

namespace Lufia;

class Soldier extends Unit
{
    protected $damage = 40;
    protected $armor;

    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function attack(Unit $opponent)
    {
        show(
            "<p>{$this->name} ataca con la espada a {$opponent->getName()}</p>"
        );

        $opponent->takeDamage($this->damage);
    }

    protected function absorbDamage($damage)
    {
        if ($this->armor) {
            $damage = $this->armor->absorbDamage($damage);
        }

        return $damage;
    }
}
