<?php

namespace Lufia;

use Lufia\Interfaces\Armor;

abstract class Unit
{
    protected $hp = 40;
    protected $name;
    protected $armor;
    protected $weapon;

    public function __construct($name, Weapon $weapon = null)
    {
        $this->name = $name;
        $this->weapon = $weapon;
    }

    public function setWeapon(Weapon $weapon)
    {
        $this->weapon = $weapon;
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

    public function attack(Unit $opponent)
    {
        show($this->weapon->getDescription($this, $opponent));

        $opponent->takeDamage($this->weapon->getDamage());
    }

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
