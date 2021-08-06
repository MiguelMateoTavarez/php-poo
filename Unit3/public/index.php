<?php

use Lufia\HtmlNode;
use Lufia\User;

require_once '../vendor/autoload.php';

// $node = (new HtmlNode('textarea', 'Lufia'))
//         ->name('content');

$node = HtmlNode::textarea('Lufia')
    ->name('content')
    ->id('contenido');

var_dump($node('name'), $node('width', 100));


