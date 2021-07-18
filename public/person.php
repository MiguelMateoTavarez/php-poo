<?php

namespace Lufia;

Class Person
{
    protected $name;

    protected static $database = 'mysql';
    protected static $table = 'people';

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function showName()
    {
        echo "<p>$this->name</p>";
    }
}

$miguel = new Person('Miguel');
$ruth = new Person ('Ruth');

$miguel->showName();
$ruth->showName();

