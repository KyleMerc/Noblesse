<?php

namespace Noblesse\Utility;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Character\Character;

abstract class Status
{
    private $mapName;
    
    public static function status(Character $character)
    {
        $health = $character->getHealth();
        $retreat = $character->flee();


        $statusMsg = "
           ------------------------
           |                      |
              Health: $health
           |                      |
              Flee:   $retreat    
           |                      |          
           -------------------------
        ";

        return $statusMsg;
    }
}