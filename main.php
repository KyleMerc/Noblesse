<?php

require_once "Noblesse/start.php";

use Noblesse\Utility\MainUtil as Char;
use Noblesse\Utility\Status;

$mainChar = Char::mainCharacter('m2');

$result = Char::battleStart($mainChar, Char::enemyCharacter('v'), true);
// echo $result . "\n";
echo Status::status($mainChar);

// while (true) {
//     echo "\tVampire has come to attack you\n\n";
//     $enemy = Char::enemyCharacter('v');

//     echo "\t" . $enemy->attack($mainChar) . "\n";

//     echo "\tFlee   [f]\n\tAttack [atk]\n";
//     break;
// }

// echo Status::status($mainChar) . "\n";