<?php

namespace Lufia;

class HtmlNode
{
    protected $tag;
    protected $content;
    protected $attributes = [];

    public function __construct($tag, $content = null, $attributes = [])
    {
        $this->tag = $tag;
        $this->content = $content;
        $this->attributes = $attributes;
    }

    public function __invoke($name, $default = null)
    {
        return $this->get($name, $default);
    }

    public function get($name, $default = null)
    {
        return $this->attributes[$name] ?? $default;
    }

    public function __toString()
    {
        return $this->render();
    }

    public static function __callStatic($method, array $args = [])
    {
        $content = isset($args[0]) ? $args[0] : null;

        $attributes = isset($args[1]) ? $args[1] : [];

        return new HtmlNode($method, $content, $attributes);
    }

    public function __call($method, array $arg = [])
    {
        $this->attributes[$method] = $arg[0];

        return $this;
    }

    protected function render()
    {
        $result =  "<$this->tag {$this->renderAttributes()}>";

        if ($this->content != null) {
            $result .= $this->content;
            $result .= "</{$this->tag}>";
        }

        return $result;
    }

    protected function renderAttributes()
    {
        $result = "";

        foreach ($this->attributes as $name => $value) {
            $result = sprintf('%s="%s"', $name, $value);
        }
    }
}
