<?php

use Lufia\User;

require_once '../vendor/autoload.php';

$user = new User([
    'first_name' => 'Miguel',
    'last_name' => 'Mateo',
]);

$user->nickname = 'Sander';

unset($user->nickname);

echo "<p>
        Bienvenido 
            {$user->first_name} 
            {$user->last_name} 
    </p>";
    
if (isset($user->nickname)) {
    echo "<p>Nickname: {$user->nickname}</p>";
}

