<?php

namespace Noblesse\Character\Factory;

require $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Character\Character;
use Noblesse\Character\CharacterType\Human;
use Noblesse\Character\CharacterType\Vampire;
use Noblesse\Character\CharacterType\Werewolf;
use Noblesse\Character\CharacterType\SimpleModifiedHuman;
use Noblesse\Character\CharacterType\SuperModifiedHuman;

abstract class CharacterFactory
{
    /**
     * @param string $opt
     *  
<<<<<<< HEAD:Noblesse/Character/CharacterFactory.php
     * @return \Noblesse\Character\Chararacter
=======
     * @return \Noblesse\Character\Character
>>>>>>> character:Noblesse/Character/Factory/CharacterFactory.php
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