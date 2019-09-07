<?php

require_once "Noblesse/start.php";

use Noblesse\Utility\MainUtil as Char;
use Noblesse\Utility\Status;
use Noblesse\Utility\ExploreRoom;
use Noblesse\Dialogue\IntroDialogue as Intro;

// $mainChar = Char::mainCharacter('m2');

// $result = Char::battleStart($mainChar, Char::enemyCharacter('v'), true);
// // echo $result . "\n";
// echo Status::status($mainChar);
$room = new ExploreRoom('Frankenstein');
Status::sampleStatusMap($room);
