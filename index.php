<?php

namespace Lufia;

require_once './src/helpers.php';
require_once './Vendor/Armor.php';

spl_autoload_register(function ($className) {
    show("Intentando cargar <strong>$className</strong>");
    if (strpos($className, 'Lufia\\') === 0) {
        $className = str_replace('Lufia\\', '', $className);

        if (file_exists("src/$className.php")) {

            require_once "src/$className.php";
        }
    }
});

$bronze_armor = new BronzeArmor();
$silver_armor = new BronzeArmor();
$cursed_armor = new CursedArmor();

$sander = new Archer('Sander');
$azura = new Soldier('Azura');

$sander->move('el norte');
$sander->attack($azura);
$azura->setArmor($cursed_armor);
$sander->attack($azura);
$azura->attack($sander);
