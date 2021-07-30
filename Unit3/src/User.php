<?php

namespace Lufia;

class User extends Model
{
    public function getFirstNameUpperAttribute($value)
    {
        return strtoupper($value);
    }
}
