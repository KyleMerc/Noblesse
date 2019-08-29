<?php

require_once "Noblesse/start.php";

use Noblesse\Utility\MainUtil as Char;
use Noblesse\Dialogue\IntroDialogue;

// $opt = IntroDialogue::mainMenu();

// $mainChar = MainUtil::mainCharacter($opt);

// echo "\t" . $mainChar->getName() . " has been chosen. Game Start\n";

// $dailogue = IntroDialogue::introDialogue($mainChar->getName());

// echo $dailogue['intro'];
// sleep(1);
// echo $dailogue['charIntro'];

$char = Char::mainCharacter('h');
$enemy = Char::enemyCharacter('v');
$char->attack($enemy);
$char->attack($enemy);
$enemy->attack($char);
$enemy->attack($char);
echo $char->getHealth() . "\n" . $enemy->getHealth();