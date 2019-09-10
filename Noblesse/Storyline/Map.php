<?php

namespace Noblesse\Storyline;

require_once $_SERVER['DOCUMENT_ROOT'] . 'Noblesse/start.php';

use Noblesse\Character\Character;
use Noblesse\Storyline\Interfaces\DirectionInterface;
use Noblesse\Storyline\Interfaces\MapInterface;
use Noblesse\Utility\MainUtil as Char;

abstract class Map implements MapInterface, DirectionInterface
{
    private $roomName;
    private $north;
    private $east;
    private $south;
    private $west;
    private $trapCount;
    private $itemCount;
    private $roomOrder;
    private $isLocked;
    

    /**
     * @param string $newRoomName
     * @param array  $northDoor, $eastDoor, $southDoor, $westDoor
     * @param bool   $isLocked
     * @param int    $traps
     * @param int    $items
     */
    public function __construct(
        string $newRoomName,
        int    $newTraps,
        int    $newItems,
        string $newRoomOrder,
        bool   $isLocked
        ) {

        $this->roomName     = $newRoomName;
        $this->isLocked     = $isLocked;
        $this->trapCount    = $newTraps;
        $this->itemCount    = $newItems;
        $this->roomOrder    = $newRoomOrder;
    }

    public function getRoomName(): string
    {
        return $this->roomName;
    }

    public function getRoomOrder()
    {
        return $this->roomOrder;
    }

    public function openDoor(bool $key, string $door)
    {
        $openDoorMsg = "\nDoor is now open!\n";

        switch (strtolower($door)) {
            case 'n':
                if ($this->north && $this->north->isDoorLocked()) {
                    echo $openDoorMsg;
                    $this->north->isLocked = $key;
                } 
                break;
            case 'e':
                if ($this->east && $this->east->isDoorLocked()) {
                    echo $openDoorMsg;
                    $this->east->isLocked = $key;
                }
                break;
            case 's':
                if ($this->south && $this->south->isDoorLocked()) {
                    echo $openDoorMsg;
                    $this->south->isLocked = $key;
                }
                break;
            case 'w':
                if ($this->west && $this->west->isDoorLocked()) {
                    echo $openDoorMsg;
                    $this->west->isLocked = $key;
                }
                break;
            default: echo "\nUnknown command\n";
        }
        
        
    }

    public function isDoorLocked(): bool
    {
        return $this->isLocked;
    }

    public function getTrapCount(): int
    {
        return $this->trapCount;
    }

    public function getItemCount(): int
    {
        return $this->itemCount;
    }

    public static function enemySpawn(Character $mainChar, Character $enemyChar): string 
    {  
        return Char::battleStart($mainChar, $enemyChar);
    }

    /**
     * Set the connectecd rooms for each Main character
     *
     * @param Direction $newNorth
     * @param Direction $newEast
     * @param Direction $newSouth
     * @param Direction $newWest
     * @return void
     */
    public function setDirection(
        DirectionInterface $newNorth = NULL, 
        DirectionInterface $newEast  = NULL, 
        DirectionInterface $newSouth = NULL, 
        DirectionInterface $newWest  = NULL
    ):void {
        $this->north = $newNorth;
        $this->east = $newEast;
        $this->south = $newSouth;
        $this->west = $newWest;
    }

    public function north()
    {
        return $this->north;
    }

    public function east()
    {
        return $this->east;
    }

    public function south()
    {
        return $this->south;
    }

    public function west()
    {
        return $this->west;
    }
}