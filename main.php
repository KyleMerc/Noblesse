<?php

require_once "Noblesse/start.php";

use Noblesse\Utility\MainUtil as Char;
use Noblesse\Utility\Status;

$mainChar = Char::mainCharacter('m2');
$enemy = Char::enemyCharacter('v');

// echo $mainChar->getModHumanType();

$mainChar->attack($enemy);
$mainChar->attack($enemy);
$mainChar->attack($enemy);
$mainChar->attack($enemy);
echo Status::status($enemy) . "\n";