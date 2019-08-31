<?php

namespace Noblesse\Character\CharacterType;

require $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Character\Character;

class Human extends Character
{
    /**
     * Default Character creation is Main Character
     */
    public function __construct()
    {
        parent::__construct('Han Shinwoo', 'Human', 'Karate', 40, 45);
    }
}