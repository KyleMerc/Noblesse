<?php

namespace Noblesse\Character;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/Character/CharConstants.php";

// use const Noblesse\Character\{HEALTH, BAR};
use const \BAR, \HEALTH;
// use const \HEALTH;
echo BAR . "\n" . HEALTH;

