<?php

namespace Lufia;

class User extends Model
{
    protected $lunch;

    // public function getFirstNameUpperAttribute($value)
    // {
    //     return strtoupper($value);
    // }

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->lunch = new Lunch();
    }

    public function setLunch(Lunch $lunch)
    {
        $this->lunch = $lunch;
    }

    public function eat()
    {
        if($this->lunch->isEmpty()) {
            throw new \Exception("{$this->name} no tiene nada para comer: (");
        }

        echo "<p>{$this->name} almuerza {$this->lunch->shift()}</p>";
    }

    public function eatMeal()
    {

        $total = count($this->lunch);

        echo "<p>{$this->name} tiene {$total} alimentos</p>";

        foreach ($this->lunch as $food) {
            echo"<p>{$this->name} eats {$food}</p>";
        }
    }
}
