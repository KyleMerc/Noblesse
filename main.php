<?php

require_once "Noblesse/start.php";

use Noblesse\Utility\MainUtil;
use Noblesse\Dialogue\IntroDialogue;

$opt = IntroDialogue::mainMenu();

$mainChar = MainUtil::mainCharacter($opt);

echo "\t" . $mainChar->getName() . " has been chosen. Game Start\n";

$dailogue = IntroDialogue::introDialogue($mainChar->getName());

echo $dailogue['intro'];
echo $dailogue['charIntro'];