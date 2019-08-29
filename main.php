<?php

require_once "Noblesse/start.php";

use Noblesse\Utility\MainUtil as Char;
use Noblesse\Utility\Status;

$mainChar = Char::mainCharacter('h');
$enemy = Char::enemyCharacter('v');

// echo $mainChar->getModHumanType();
// echo Status::status($enemy) . "\n";
echo $enemy->attack($mainChar) . "\n";
echo $enemy->attack($mainChar) . "\n";
echo $enemy->attack($mainChar) . "\n";

echo Status::status($mainChar) . "\n";