<?php

namespace Noblesse\Utility;

use Noblesse\Character\Character;
use Noblesse\Storyline\Map;
use Noblesse\Storyline\Factory\RoomFactory;

require_once $_SERVER['DOCUMENT_ROOT'] . 'Noblesse/start.php';

class RoomExploration
{
    private $rooms;

    /**
     * To set the room setting for the current Main character.
     * Room objects are created here.
     *
     * @param string $mainCharName
     */
    public function __construct(string $mainCharName)
    {
       $this->rooms = RoomFactory::setCharacterRooms($mainCharName);
    }

    /**
     * Go to current room
     *
     * @param string $room
     * @return \Noblesse\Storyline\Map
     */
    public function goToRoom(string $direction)
    {
        // switch ($room) {
        //     case 'First' :
        //         return $this->rooms['firstRoom'];
        //     case 'Second':
        //         return $this->rooms['secondRoom'];
        //     case 'Third' :
        //         return $this->rooms['thirdRoom'];
        //     case 'Fourth':
        //         return $this->rooms['fourthRoom'];
        // }

        switch ($direction) {
            case 'north':

        }
    }
}

$room = new RoomExploration('Frankenstein');

// $currentRoom = $room->goToRoom('First');
// echo $room['firstRoom']->getRoomName() . "\n";
var_dump($room['firstRoom']);

// $state = $currentRoom->getFoundDoors();
// echo $currentRoom->getFoundDoors()['east']['is_found'] . "\n";
// echo $state['west']['is_found'] . "\n";
// echo $state['south']['is_found'] . "\n";
// echo $state['east']['is_found'] . "\n";
// echo $state['north']['is_found'] . "\n";
// echo $currentRoom->east() . "\n";