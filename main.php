<?php

require_once "Noblesse/start.php";

use Noblesse\Utility\MainUtil as Char;
use Noblesse\Utility\Status;

$mainChar = Char::mainCharacter('h');

$result = Char::battleStart($mainChar, Char::enemyCharacter('v'), true);
// echo $result . "\n";
echo Status::status($mainChar);