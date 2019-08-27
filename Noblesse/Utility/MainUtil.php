<?php

namespace Noblesse\Utility;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Character\CharacterFactory;

abstract class MainUtil
{
    /**
     * Default values is instantiated in object creation.
     */
    public static function mainCharacter(string $opt)
    {
        switch (strtoupper($opt)) {
            case 'F':
                return CharacterFactory::makeCharacter('SuperModHuman');
            case 'M':
                return CharacterFactory::makeCharacter('Werewolf');
            case 'M2':
                return CharacterFactory::makeCharacter('SimpleModHuman');
            case 'H':
                return CharacterFactory::makeCharacter('Human');
            default:
                return NULL;
        }
    }
}