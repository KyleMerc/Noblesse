<?php

namespace Noblesse\Storyline;

require_once $_SERVER['DOCUMENT_ROOT'] . 'Noblesse/start.php';

use Noblesse\Storyline\Interfaces\MapInterface;
abstract class Map implements MapInterface
{
    private $roomName;
    private $northDoor;
    private $eastDoor;
    private $southDoor;
    private $westDoor;
    private $trapCount;
    private $itemCount;
    private $roomOrder;
    

    /**
     * @param string $newRoomName
     * @param array  $northDoor, $eastDoor, $southDoor, $westDoor 
     * @param int    $traps
     * @param int    $items
     */
    public function __construct(
        string $newRoomName,
        int    $newTraps,
        int    $newItems,
        string $newRoomOrder,
        array  $northDoor = [], 
        array  $eastDoor  = [], 
        array  $southDoor = [], 
        array  $westDoor  = [] 
        ) {

        $this->roomName     = $newRoomName;
        $this->northDoor    = ['is_found' => $northDoor[0]];
        $this->eastDoor     = ['is_found' => $eastDoor[0]];
        $this->southDoor    = ['is_found' => $southDoor[0]];
        $this->westDoor     = ['is_found' => $westDoor[0]];
        $this->trapCount    = $newTraps;
        $this->itemCount    = $newItems;
        $this->roomOrder    = $newRoomOrder;
    }

    public function getRoomName()
    {
        return $this->roomName;
    }

    public function getRoomOrder()
    {
        return $this->roomOrder;
    }

    /**
     *
     * @return array[][] Array key ['is_found'] value found / notFound
     */
    public function getFoundDoors()
    {
        return [
            'north' => $this->northDoor,
            'east'  => $this->eastDoor,
            'south' => $this->southDoor,
            'west'  => $this->westDoor
        ];
    }

    public function openDoor(bool $key, string $door)
    {
        switch ($door) {
            case 'north':
                $this->northDoor[1] = $key;
            case 'east':
                $this->eastDoor[1]  = $key;
            case 'south':
                $this->southDoor[1] = $key;
            case 'west':
                $this->westDoor[1]  = $key;
        }
    }

    public function getTrapCount()
    {
        return $this->trapCount;
    }

    public function getItemCount()
    {
        return $this->itemCount;
    }
}