<?php

namespace Noblesse\Utility;

use Noblesse\Character\Character;
use Noblesse\Storyline\Map;
use Noblesse\Storyline\Factory\RoomFactory;

require_once $_SERVER['DOCUMENT_ROOT'] . 'Noblesse/start.php';

class RoomExploration
{
    private $rooms;

    public function __construct(string $mainCharName)
    {
       $this->rooms = RoomFactory::setCharacterRooms($mainCharName);
    }

    public function goToRoom(string $room)
    {
        switch ($room) {
            case 'First' :
                return $this->rooms['firstRoom'];
            case 'Second':
                return $this->rooms['secondRoom'];
            case 'Third' :
                return $this->rooms['thirdRoom'];
            case 'Fourth':
                return $this->rooms['fourthRoom'];
        }
    }
}

$room = new RoomExploration('Muzaka');

$currentRoom = $room->goToRoom('Fourth');
echo $currentRoom->getRoomName() . "\n";
$state = $currentRoom->getDoorState();
echo $state['north']['is_found'] . "\n";
