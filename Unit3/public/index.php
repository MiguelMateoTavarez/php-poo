<?php

use Lufia\HtmlNode;
use Lufia\User;

require_once '../vendor/autoload.php';

// $node = (new HtmlNode('textarea', 'Lufia'))
//         ->name('content');

$node = HtmlNode::textarea('Lufia')
    ->name('content')
    ->id('contenido');

echo $node->render();

// $user = new User();

// $user->fill([
//     'first_name' => 'Miguel',
//     'last_name' => 'Mateo',
// ]);

// $user->nickname = 'Sander';

// unset($user->nickname);

// echo "<p>
//         Bienvenido 
//             {$user->first_name} 
//             {$user->last_name} 
//     </p>";
    
// if (isset($user->nickname)) {
//     echo "<p>Nickname: {$user->nickname}</p>";
// }

