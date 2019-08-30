<?php

require_once "Noblesse/start.php";

use Noblesse\Utility\MainUtil as Char;
use Noblesse\Utility\Status;

$mainChar = Char::mainCharacter('h');
// $enemy = ;

// echo $mainChar->getModHumanType();
// echo Status::status($enemy) . "\n";
// while (true) {
//     echo $enemy->attack($mainChar) . "\n";
//     if ($mainChar->getHealth() < 30) {
//         if($mainChar->flee()) break;    
//     }
// }

<<<<<<< HEAD
$result = Char::battleStart($mainChar, Char::enemyCharacter('v'), true);
// echo $result . "\n";
=======
Char::battleStart($mainChar, $enemy);
>>>>>>> 67f19bf71be213643794c7f79a5c9933ef178e43
echo Status::status($mainChar);

// while (true) {
//     echo "\tVampire has come to attack you\n\n";
//     $enemy = Char::enemyCharacter('v');

//     echo "\t" . $enemy->attack($mainChar) . "\n";

//     echo "\tFlee   [f]\n\tAttack [atk]\n";
//     break;
// }

// echo Status::status($mainChar) . "\n";