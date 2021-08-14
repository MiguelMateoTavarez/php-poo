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

        $food = $this->lunch->filter(function($food) {
            return !$food->beverage;
        });

        $beverages = $this->lunch->filter(function($food) {
            return $food->beverage;
        });

        echo "<p>{$this->name} tiene {$this->lunch->count()} alimentos</p>";

        foreach ($food as $item) {
            echo"<p>{$this->name} eats {$item->name}</p>";
        }

        foreach ($beverages as $item) {
            echo"<p>{$this->name} drinks {$item->name}</p>";
        }
    }
}
