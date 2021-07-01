<?php

namespace Lufia;

require_once '../Vendor/autoload.php';

$bronze_armor = new Armors\BronzeArmor();
$silver_armor = new Armors\SilverArmor();
$cursed_armor = new Armors\CursedArmor();

$basic_sword = new Weapons\BasicSword();
$basic_bow = new Weapons\BasicBow();
$cross_bow = new Weapons\CrossBow();

$sander = new Archer('Sander', $basic_bow);
$azura = new Soldier('Azura', $basic_sword);

$sander->move('el norte');
$sander->attack($azura);
$azura->setArmor($silver_armor);
$sander->attack($azura);
$azura->attack($sander);
