<?php

abstract class Unit
{
    protected $hp;
    protected $name;

    public function __construct($name, $hp = 40)
    {
        $this->hp = $hp;
        $this->name = $name;
    }

    public function show($message)
    {
        echo "<p>$message</p>";
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
        if($hp < 0 ){
            $hp = 0;
        }
        
        $this->hp = $hp;
        $this->show(
            "{$this->name} ahora tiene {$this->hp} puntos de vida"
        );
    }

    public function setArmor(Armor $armor = null)
    {
        $this->armor = $armor;
    }

    public function move($direction)
    {
        $this->show(
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
        $this->show(
            "<p>{$this->name} muere</p>"
        );

        exit();
    }

    protected function absorbDamage($damage)
    {
        return $damage;
    }
}

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
        $this->show(
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

class Archer extends Unit
{

    protected $damage = 20;

    public function attack(Unit $opponent)
    {
        $this->show(
            "<p>{$this->name} dispara una flecha a {$opponent->getName()}</p>"
        );

        $opponent->takeDamage($this->damage);
    }
}

interface Armor
{
    public function absorbDamage($damage);
}

class BronzeArmor implements Armor
{
    public function absorbDamage($damage)
    {
        return $damage / 2;
    }
}

class SilverArmor implements Armor
{
    public function absorbDamage($damage)
    {
        return $damage / 3;
    }
}

class CursedArmor implements Armor
{
    public function absorbDamage($damage)
    {
        return $damage * 2;
    }
}

$bronze_armor = new BronzeArmor();
$silver_armor = new BronzeArmor();
$cursed_armor = new CursedArmor();

$sander = new Archer('Sander');
$azura = new Soldier('Azura');

$sander->move('el norte');
$sander->attack($azura);
$azura->setArmor($cursed_armor);
$sander->attack($azura);
$azura->attack($sander);
