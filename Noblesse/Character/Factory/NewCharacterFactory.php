<?php

namespace Noblesse\Character\Factory;

require_once $_SERVER['DOCUMENT_ROOT'] . 'Noblesse/start.php';

use Noblesse\Character\Character;

use const Noblesse\Character\Helpers\BASE_HEALTH;

class NewCharacterFactory
{
    public static function makeMainCharacter(string $character)
    {
        switch ($character) {
            case 'f'    : return self::SuperModifiedHuman();
            case 'm2'   : return self::SimpleModifiedHuman();
            case 'm'    : return self::Werewolf();
            case 'h'    : return self::Human();
            default     : return NULL;
        }
    }

    public static function makeEnemyCharacter(string $character)
    {
        switch ($character) {
            case 'v'    : return self::Vampire();
            default     : return NULL;
        }
    }

    public static function status(Character $character)
    {   
        echo $character->getName() . "\n" . $character->getWeaponType() . "  " . $character->getDamage() . "\n";
    }

    /**
     * Default creation are Main characters
     *
     * @param string $newName
     * @return void
     */
    public static function SuperModifiedHuman(string $newName = 'Frankenstein')
    {
        $character = new Character();

        $character->setName($newName);
        $character->setHealth(BASE_HEALTH);
        $character->setCharType('Modified Human');
        $character->setWeaponType('Dark Spear');
        $character->setDamage(30, 50);
        $character->setModHumanType(true, 'Super');
        
        return $character;
    }

    public static function SimpleModifiedHuman(string $newName = 'M-21')
    {
        $character = new Character();

        $character->setName($newName);
        $character->setHealth(BASE_HEALTH);
        $character->setCharType('Modified Human');
        $character->setWeaponType('Gun');
        $character->setDamage(25, 30);
        $character->setModHumanType(true, 'Simple');
        
        return $character;
    }

    public static function Human(string $newName = 'Han Shinwoo')
    {
        $character = new Character();

        $character->setName($newName);
        $character->setHealth(BASE_HEALTH);
        $character->setCharType('Human');
        $character->setWeaponType('Karate');
        $character->setDamage(40, 45);
        $character->setModHumanType();
        
        return $character;
    }

    public static function Werewolf(string $newName = 'Muzaka')
    {
        $character = new Character();

        $character->setName($newName);
        $character->setHealth(BASE_HEALTH);
        $character->setCharType('Werewolf');
        $character->setWeaponType('Strong Punch');
        $character->setDamage(25, 45);
        $character->setModHumanType();
        
        return $character;
    }

    public static function Vampire(string $newName = 'Nameless')
    {
        $character = new Character();

        $character->setName($newName);
        $character->setHealth(BASE_HEALTH);
        $character->setCharType('Human');
        $character->setWeaponType('Karate');
        $character->setDamage(1, 10);
        $character->setModHumanType();
        
        return $character;
    }
    //------------------- End of Character creation
}