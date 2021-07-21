<?php

namespace Lufia;

class Dialogues
{
    protected static $messages = [
        'BasicBowAttack' => ':unit dispara una flecha a :opponent',
        'BasicSwordAttack' => ':unit ataca con la espada a :opponent',
        'CrossBowAttack' => ':unit dispara un virote a :opponent',
        'FireBowAttack' => ':unit dispara una flecha a :opponent',
    ];

    public static function dialogue()
    {
        return static::$messages;
    }
}