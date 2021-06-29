<?php

namespace Lufia;

require_once '../Vendor/autoload.php';

$bronze_armor = new Armors\BronzeArmor();
$silver_armor = new Armors\BronzeArmor();
$cursed_armor = new Armors\CursedArmor();

$sander = new Archer('Sander');
$azura = new Soldier('Azura');

$sander->move('el norte');
$sander->attack($azura);
$azura->setArmor($cursed_armor);
$sander->attack($azura);
$azura->attack($sander);
