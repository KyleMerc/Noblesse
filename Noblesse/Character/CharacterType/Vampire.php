<?php

namespace Noblesse\Character\CharacterType;

require $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Character\Character;

class Vampire extends Character
{
    private $droppedItem;

    /**
     * Not part of Main Character but an enemy.
     */
    public function __construct()
    {
        parent::__construct('Nameless', 'Vampire', 'Claws', 1, 10);
    }

    /**
     * @return bool $item
     */
    public function droppedItem(bool $setDroppedItem)
    {
        
    }
}