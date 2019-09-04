<?php

namespace Noblesse\Utility;

use Noblesse\Character\Character;
use Noblesse\Storyline\Map;
use Noblesse\Storyline\Factory\RoomFactory;

require_once $_SERVER['DOCUMENT_ROOT'] . 'Noblesse/start.php';

class RoomExploration
{
    private $rooms;
    private $currentRoom;

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
     * Set the current room
     *
     * @param \Noblesse\Storyline\Map $room
     */
    public function goToRoom(Map $room)
    {
       $this->currentRoom = $room;
    }

    public function currentRoom()
    {
        return $this->currentRoom;
    }

    public function getRooms()
    {
        return $this->rooms;
    }
}

$roomSetup      = new RoomExploration('Frankenstein');

$room           = $roomSetup->getRooms();
$roomNumber     = array_keys($room);
$regexDirection = '/^[^a-z0-9]*([news])[^a-z0-9]*$/';
$currentRoom;
$nextRoom;

while (true) {
    // Starting room
    $currentRoom = $room['firstRoom']['currentRoom'];

    $opt = readline("Where to go?\n[n]/[e]/[s]/[w]: ");

    if (preg_match($regexDirection, $opt) == 0) {
        echo "Invalid command...\n";
        break;
    }

    $numberOfDoors;
    foreach ($currentRoom->getFoundDoors() as $key => $foundDoor)
    {
        if ($foundDoor['is_found'] == 'found') {
            $numberOfDoors++;
        }
    }

    echo $currentRoom->getRoomName() . "\n$numberOfDoors door/s found\n";

    // switch (true) {
    //     case 
    // }

    switch (strtolower($opt)) {
        case 'n':
            $nextRoom = $room[$roomNumber[0]]['north'];
            break;
        case 'e':
            $nextRoom = $room[$roomNumber[0]]['east'];
            break;
        case 's':
            $nextRoom = $room[$roomNumber[0]]['south'];
            break;
        case 'w':
            $nextRoom = $room[$roomNumber[0]]['west'];
            break;
    }

    if ($nextRoom == NULL) {
        echo "No room found\n";
        break;
    }

    echo $nextRoom->getRoomName() . "\n";
}

// $currentRoom = $room['secondRoom']['west'];
// echo $currentRoom->getRoomName() . "\n";