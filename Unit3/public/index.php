<?php

use Lufia\HtmlNode;
use Lufia\User;
use Lufia\Lunch;

require_once '../vendor/autoload.php';

// $node = (new HtmlNode('textarea', 'Lufia'))
//         ->name('content');

// $node = HtmlNode::textarea('Lufia')
//     ->name('content')
//     ->id('contenido');

// var_dump($node('name'), $node('width', 100));

//Father
$gordon = new User(['name' => 'Gordon']);

//Daugthers
$joanie = new User(['name' => 'Joanie']);

$haley = new User(['name' => 'Haley']);

//Lunch
$lunchBox = new Lunch(['Sandwich', 'Papas', 'Jugo de naranja', 'Manzana']);

//Has lunch
$joanie->setLunch(clone($lunchBox));

//Action
$joanie->eatMeal();
