<?php

namespace Lufia;

class User
{
    protected $attributes = [];

    public function __construct(array $attributes = [])
    {
        $this->attributes = $attributes;
    }

    protected function getAttribute($name)
    {
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        } 
    }

    protected function setAttribute($name, $value)
    {
        $this->attributes[$name] = $value;
    }

    protected function issetAttribute($name)
    {
        if(isset($this->attributes[$name])) {
            return $this->attributes[$name];
        }
    }

    protected function unsetAttrigute($name)
    {
        if(isset($this->attributes[$name])) {
            unset($this->attributes[$name]);
        }
    }

    public function __set($name, $value)
    {
        $this->setAttribute($name, $value);
    }

    public function __get($name)
    {
        return $this->getAttribute($name);
    }

    public function __isset($name)
    {
        return $this->issetAttribute($name);
    }

    public function __unset($name)
    {
        $this->unsetAttrigute($name);
    }
}
