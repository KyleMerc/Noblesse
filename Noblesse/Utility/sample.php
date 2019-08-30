<?php

namespace Noblesse\Utility;

require $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Character\Misc\CharacterFactory as Char;

$obj = Char::makeCharacter('Vampire');
echo $obj->getName();