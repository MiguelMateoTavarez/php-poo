<?php

namespace Lufia;

use Lufia\Armors\MissingArmor;
use Lufia\Interfaces\Armor;
use Lufia\FileLogger;

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

    public static function createSoldier($name)
    {
        $soldier = new Unit($name);
        
        return $soldier;
    }

    public function setWeapon(Weapon $weapon)
    {
        $this->weapon = $weapon;

        return $this;
    }

    public function setArmor(Armor $armor = null)
    {
        $this->armor = $armor;

        return $this;
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
        Log::info(
            "{$this->name} ahora tiene {$this->hp} puntos de vida"
        );
    }

    public function move($direction)
    {
        Log::info(
            "{$this->name} camina hacia $direction"
        );
    }

    public function attack(Unit $opponent)
    {
        $attack = $this->weapon->createAttack();

        Log::info($attack->getDescription($this, $opponent));

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
        Log::info(
            "<p>{$this->name} muere</p>"
        );

        exit();
    }
}
