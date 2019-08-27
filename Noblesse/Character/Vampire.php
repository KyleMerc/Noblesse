<?php

namespace Noblesse\Character;

require $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

class Vampire extends Character
{
    /**
     * Not part of Main Character but an enemy.
     */
    public function __construct()
    {
        parent::__construct('Nameless', 'Vampire', 'Claws');
    }
}