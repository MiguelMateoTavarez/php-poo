<?php

namespace Lufia;

abstract class Model
{
    protected $attributes = [];

    public function __construct(array $attributes = [])
    {
        $this->fill($attributes);
    }

    public function fill(array $attributes = [])
    {
        $this->attributes = $attributes;
    }

    protected function getAttribute($name)
    {
        $value = $this->getAttributeValue($name);

        if ($this->hasGetMutator($name)) {
            return $this->mutateAttribute($name, $value);
        }

        return $value;
    }

    protected function hasGetMutator($name)
    {
        $method = 'get' . Str::studly($name) . 'UpperAttribute';

        return method_exists($this, $method);
    }

    protected function mutateAttribute($name, $value)
    {
        return $this->{'get' . Str::studly($name) . 'UpperAttribute'}($value);
    }

    protected function getAttributeValue($name)
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
        if (isset($this->attributes[$name])) {
            return $this->attributes[$name];
        }
    }

    protected function unsetAttrigute($name)
    {
        if (isset($this->attributes[$name])) {
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
