<?php

namespace Noblesse\Character;

require $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Character\Human;
use Noblesse\Character\Vampire;
use Noblesse\Character\Werewolf;
use Noblesse\Character\SimpleModifiedHuman;
use Noblesse\Character\SuperModifiedHuman;


abstract class CharacterFactory
{
    /**
     * @param string $opt
     *  
     * @return ChararacterInterface Werewolf and Human
     * 
     * @return ModifiedHumanInterface SuperModHuman and SimpleModHuman 
     */
    public static function makeCharacter(string $newCharacter): Character
    {
        switch ($newCharacter) {
            case 'Human':
                return new Human();
            case 'Werewolf':
                return new Werewolf();
            case 'Vampire':
                return new Vampire();
            case 'SuperModHuman':
                return new SuperModifiedHuman();
            case 'SimpleModHuman':
                return new SimpleModifiedHuman();
            default:
                return NULL;
        }
    }
}