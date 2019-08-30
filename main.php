<?php

require_once "Noblesse/start.php";

use Noblesse\Utility\MainUtil as Char;
use Noblesse\Utility\Status;
use Noblesse\Dialogue\IntroDialogue as Intro;

<<<<<<< HEAD
$opt = Intro::mainMenu();

$mainChar = Char::mainCharacter($opt);
$name = $mainChar->getName();
// $enemy = Char::enemyCharacter('v');

echo "\t" . $name . " has been chosen\n";

$dialogue = Intro::introDialogue($name);
echo $dialogue['intro'];
echo $dialogue['charIntro'];
// echo $mainChar->getModHumanType();
// echo Status::status($enemy) . "\n";
// echo $enemy->attack($mainChar) . "\n";
// echo $enemy->attack($mainChar) . "\n";
// echo $enemy->attack($mainChar) . "\n";

// echo Status::status($mainChar) . "\n";
=======
$mainChar = Char::mainCharacter('m2');

$result = Char::battleStart($mainChar, Char::enemyCharacter('v'), true);
// echo $result . "\n";
echo Status::status($mainChar);
>>>>>>> character
