<?php

namespace Noblesse\Character\Factory;

require_once $_SERVER['DOCUMENT_ROOT'] . 'Noblesse/start.php';

use Noblesse\Character\Character;

class NewCharacterFactory
{
    public static function makeCharacter(string $character): Character
    {
        switch ($character) {
            case 'SuperModifiedHuman'    : return self::SuperModifiedHuman();
            case 'SimpleModifiedHuman'   : return self::SimpleModifiedHuman();
            case 'Werewolf'              : return self::Werewolf();
            case 'Human'                 : return self::Human();
            case 'Vampire'               : return self::Vampire();
            default                      : return NULL;
        }
    }

    /**
     * Default creation are Main characters
     *
     * @param string $newName
     * @return Character
     */
    public static function SuperModifiedHuman(string $newName = 'Frankenstein')
    {
        $character = new Character($newName, 'Modified Human', 'Dark Spear');

        $character->setDamage(30, 50);
        $character->setModHumanType(true, 'Super');
        
        return $character;
    }

    public static function SimpleModifiedHuman(string $newName = 'M-21')
    {
        $character = new Character($newName, 'Modified Human', 'Gun');

        $character->setDamage(25, 30);
        $character->setModHumanType(true, 'Simple');
        
        return $character;
    }

    public static function Human(string $newName = 'Han Shinwoo')
    {
        $character = new Character($newName, 'Human', 'Karate');

        $character->setDamage(40, 45);
        $character->setModHumanType();
        
        return $character;
    }

    public static function Werewolf(string $newName = 'Muzaka')
    {
        $character = new Character($newName, 'Werewolf', 'Strong Punch');

        $character->setDamage(25, 45);
        $character->setModHumanType();
        
        return $character;
    }

    public static function Vampire(string $newName = 'Nameless')
    {
        $character = new Character($newName, 'Vampire', 'Claws');

        $character->setDamage(1, 10);
        $character->setModHumanType();
        
        return $character;
    }
    //------------------- End of Character creation
}