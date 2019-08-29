<?php

namespace Noblesse\Utility;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Character\Character;

abstract class Status
{   
   /**
    * @param Character $character
    * @return string Status message
    */
    public static function status(Character $character)
    {
        $health   = $character->getHealth();
        $name     = $character->getName();
        $weapon   = $character->getWeaponType();
        $charType = $character->getCharType();
        $damage   = $character->getMinMaxDamage();

        if ($name == 'M-21' || $name == 'Frankenstein') {
            $modType = $character->getModHumanType();

            $statusMsg = "
                  Room: 
                  ----------------------------------------
                  |                                      |
                     Name: $name
                  |                                      |
                     Character Type: {$modType}{$charType}
                  |                                      |
                     Health: $health / 100
                  |                                      |
                     Weapon: $weapon
                  |                                      |          
                     Damage: {$damage['min']} - {$damage['max']}          
                  |                                      |          
                  ----------------------------------------
            ";
            
            return $statusMsg;
        }
        $statusMsg = "
                  Room: 
                  ----------------------------------------
                  |                                      |
                     Name: $name
                  |                                      |
                     Character Type: $charType
                  |                                      |
                     Health: $health / 100
                  |                                      |
                     Weapon: $weapon
                  |                                      |          
                     Damage: {$damage['min']} - {$damage['max']}          
                  |                                      |          
                  ----------------------------------------
        ";

        return $statusMsg;
    }
}