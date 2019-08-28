<?php

require_once "Noblesse/start.php";

use Noblesse\Utility\MainUtil as Char;

$mainChar = Char::mainCharacter('f');
$enemy = Char::enemyCharacter('v');


echo $enemy->getHealth() . "\n" . $mainChar->getDamage() . "\n";
// echo $mainChar->attack($enemy) . "\n";
// echo $mainChar->attack($enemy) . "\n";
// echo $mainChar->attack($enemy) . "\n";