<?php

namespace Noblesse\Utility;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Character\CharacterFactory;

abstract class MainUtil
{
    /**
     * Default values is instantiated in object creation.
     * @param string $option
     * @return \Noblesse\Character\Character
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

    /**
     * I've only created 1 enemy for now
     * @param string $option
     * @return \Noblesse\Character\Character
     */
    public static function enemyCharacter(string $opt)
    {
        switch (strtoupper($opt)) {
            case 'V':
                $vampire = CharacterFactory::makeCharacter('Vampire');
                $vampire->setHealth(rand(40, 50));
                return $vampire;
            default:
                return NULL;
        }
    }
}