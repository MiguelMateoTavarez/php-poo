<?php

namespace Lufia;

use Lufia\Armors\MissingArmor;
use Lufia\Interfaces\Armor;

class Unit
{
    protected $hp = 40;
    protected $name;
    protected $armor;
    protected $weapon;

    public function __construct($name, Weapon $weapon = null)
    {
        $this->name = $name;
        $this->weapon = $weapon;
        $this->armor = new MissingArmor();
    }

    public function setWeapon(Weapon $weapon)
    {
        $this->weapon = $weapon;
    }

    public function setArmor(Armor $armor = null)
    {
        $this->armor = $armor;
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

    public function move($direction)
    {
        show(
            "<p>{$this->name} camina hacia $direction</p>"
        );
    }

    public function attack(Unit $opponent)
    {
        $attack = $this->weapon->createAttack();

        show($attack->getDescription($this, $opponent));

        $opponent->takeDamage($attack);
    }

    public function takeDamage(Attack $attack)
    {
        $this->setHp($this->hp - $this->armor->absorbDamage($attack));

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
}
