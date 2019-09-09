<?php

namespace Noblesse\Utility;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Storyline\Map;
use Noblesse\Character\Character;
use Noblesse\Utility\ExploreRoom;

abstract class Status
{   
   /**
    * @param Character $character
    * @return string Status message
    */
    public static function status(Character $character, Map $currentRoom)
    {
        $health   = $character->getHealth();
        $name     = $character->getName();
        $weapon   = $character->getWeaponType();
        $charType = $character->getCharType();
        $damage   = $character->getMinMaxDamage();
        $modType  = $character->getModHumanType();

        if ($modType !== NULL) {
            $statusMsg = "
                  Room: 
                  ----------------------------------------------
                  |                                            |
                     Name: $name -- Health: $health / 100
                  |                                            |
                     Character Type: {$modType}{$charType}
                  |                                            |
                     Weapon: $weapon
                  |                                            |          
                     Damage: {$damage['min']} - {$damage['max']}          
                  |                                            |          
                  ----------------------------------------------\n";
            
            return $statusMsg;
        }
        $statusMsg = "
                  Room: 
                  ----------------------------------------------
                  |                                            |
                     Name: $name -- Health: $health / 100
                  |                                            |
                     Character Type: $charType
                  |                                            |
                     Weapon: $weapon
                  |                                            |          
                     Damage: {$damage['min']} - {$damage['max']}          
                  |                                            |          
                  ----------------------------------------------\n";

        return $statusMsg;
    }

    public static function sampleStatusMap(ExploreRoom $currentRoom)
    {
       $room = $currentRoom->currentRoom();
       $roomName = $room->getRoomName();
      $statusMsg = "
         Room: $roomName
         ----------------------------------------------
         |                                            |
            Name: name -- Health: health / 100
         |                                            |
            Character Type: charType
         |                                            |
            Weapon: weapon
         |                                            |          
            Damage: {damage['min']} - {damage['max']}          
         |                                            |          
         ----------------------------------------------\n";

         echo $statusMsg;
    }
}