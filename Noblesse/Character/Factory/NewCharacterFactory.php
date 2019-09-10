<?php

namespace Noblesse\Character\Factory;

require_once $_SERVER['DOCUMENT_ROOT'] . 'Noblesse/start.php';

use Noblesse\Character\Character;

abstract class NewCharacterFactory
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
     * Default creation are Main characters except vampire
     *
     * @return Character
     */
    public static function SuperModifiedHuman()
    {
        $character = new Character('Frankenstein', 'Modified Human', 'Dark Spear');

        $character->setDamage(30, 50);
        $character->setModHumanType(true, 'Super');
        
        return $character;
    }

    public static function SimpleModifiedHuman()
    {
        $character = new Character('M-21', 'Modified Human', 'Gun');

        $character->setDamage(25, 30);
        $character->setModHumanType(true, 'Simple');
        
        return $character;
    }

    public static function Human()
    {
        $character = new Character('Han Shinwoo', 'Human', 'Karate');

        $character->setDamage(40, 45);
        $character->setModHumanType();
        
        return $character;
    }

    public static function Werewolf()
    {
        $character = new Character('Muzaka', 'Werewolf', 'Strong Punch');

        $character->setDamage(25, 45);
        $character->setModHumanType();
        
        return $character;
    }

    public static function Vampire()
    {
        $character = new Character('Nameless', 'Vampire', 'Claws');

        $character->setHealth(rand(50, 60));
        $character->setDamage(1, 10);
        $character->setModHumanType();
        
        return $character;
    }
    //------------------- End of Character creation
}