<?php

require_once "Noblesse/start.php";

use Noblesse\Utility\MainUtil as Char;
use Noblesse\Utility\Status;
use Noblesse\Utility\ExploreRoom;
use Noblesse\Dialogue\IntroDialogue as Intro;

<<<<<<< HEAD
// $mainChar = Char::mainCharacter('m2');
=======
$mainChar = Char::mainCharacter('h');
>>>>>>> f42b810ec0ad50fc2f49161c81215bd6b17c272d

// $result = Char::battleStart($mainChar, Char::enemyCharacter('v'), true);
// // echo $result . "\n";
// echo Status::status($mainChar);
$room = new ExploreRoom('Frankenstein');
Status::sampleStatusMap($room);
