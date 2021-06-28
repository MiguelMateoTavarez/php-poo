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
        $this->hp = $hp;
        $this->show(
            "{$this->name} ahora tiene {$this->hp} puntos de vida"
        );
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

        $this->setHp($this->hp - $damage);

        if ($this->hp <= 0) {
            $this->die();
        }
    }

    public function die()
    {
        $this->show(
            "<p>{$this->name} muere</p>"
        );
    }
}

class Soldier extends Unit
{
    protected $damage = 40;

    public function attack(Unit $opponent)
    {
        $this->show(
            "<p>{$this->name} corta a {$opponent->getName()} en dos</p>"
        );

        $opponent->takeDamage($this->damage);
    }

    public function takeDamage($damage)
    {
        return parent::takeDamage($damage / 2);
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

    public function takeDamage($damage)
    {
        if(rand(0, 1) == 1) {
            return parent::takeDamage($damage);
        }
    }
}

$sander = new Archer('Sander');
$azura = new Soldier('Azura');

$sander->move('el norte');
$sander->attack($azura);
$sander->attack($azura);
$azura->attack($sander);
