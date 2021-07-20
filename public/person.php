<?php

namespace Lufia;

Class Person
{
    protected $name;

    protected static $database = 'mysql';
    protected $table = 'people';

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function showName()
    {
        return $this->name;
    }

    public function setTable($table)
    {
        $this->table = $table;
    }

    public function save()
    {
        echo "<p>Saving {$this->name} in the table ". $this->table."</p>";
    }
}

$miguel = new Person('Miguel');
$ruth = new Person ('Ruth');

$miguel->setTable('personas');
$miguel->save();
$ruth->save();

echo "<p>{$miguel->showName()}</p>";
echo "<p>{$ruth->showName()}</p>";

