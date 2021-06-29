<?php

namespace Lufia;

use WarCraft\Armor;

abstract class Unit
{
    protected $hp;
    protected $name;

    public function __construct($name, $hp = 40)
    {
        $this->hp = $hp;
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHp()
    {
        return $this->hp;
    }

    private function setHp($hp)
    {
        if ($hp < 0) {
            $hp = 0;
        }
        $this->hp = $hp;
        show(
            "{$this->name} ahora tiene {$this->hp} puntos de vida"
        );
    }

    public function setArmor(Armor $armor = null)
    {
        $this->armor = $armor;
    }

    public function move($direction)
    {
        show(
            "<p>{$this->name} camina hacia $direction</p>"
        );
    }

    abstract public function attack(Unit $opponent);

    public function takeDamage($damage)
    {
        $this->setHp($this->hp - $this->absorbDamage($damage));

        if ($this->hp <= 0) {
            $this->die();
        }
    }

    public function die()
    {
        show(
            "<p>{$this->name} muere</p>"
        );

        exit();
    }

    protected function absorbDamage($damage)
    {
        return $damage;
    }
}
