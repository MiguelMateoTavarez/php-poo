<?php

namespace Lufia;

require_once '../Vendor/autoload.php';

Translator::set(new Dialogues());

Log::setLogger(new HtmlLogger());

$bronze_armor = new Armors\BronzeArmor();
$silver_armor = new Armors\SilverArmor();
$cursed_armor = new Armors\CursedArmor();

$basic_sword = new Weapons\BasicSword();
$basic_bow = new Weapons\BasicBow();
$cross_bow = new Weapons\CrossBow();
$fire_bow = new Weapons\FireBow();

$sander = Unit::createSoldier('Sander')
                ->setArmor($silver_armor)
                ->setWeapon($basic_sword);

$azura = Unit::createSoldier('Azura')
                ->setWeapon($fire_bow);

$sander->move('el norte');
$sander->attack($azura);
$azura->setArmor($silver_armor);
$sander->attack($azura);
$azura->attack($sander);
