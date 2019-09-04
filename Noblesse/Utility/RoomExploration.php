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

$roomSetup      = new RoomExploration('Han Shinwoo');

$room           = $roomSetup->getRooms();
$roomNumber     = array_keys($room);
$regexDirection = '/^[^a-z0-9]*([newsq])[^a-z0-9]*$/';
$nextRoom;


// Starting room
$currentRoom = $room['firstRoom']['currentRoom'];

while (true) {
    echo "Current Room: " . $currentRoom->getRoomName() . "\n\n";

    $opt = readline("Where to go?\n[n]/[e]/[s]/[w] or quit [q]: ");

    if (preg_match($regexDirection, $opt) == 0) {
        echo "Invalid command...\n";
    }

    // foreach ($currentRoom->getFoundDoors() as $key => $foundDoor)
    // {
    //     if ($foundDoor['is_found'] == 'found') {
    //         $numberOfDoors++;
    //     }
    // }

    
    // . "\n$numberOfDoors door/s found\n\n";
    if (strtolower($opt) === 'q') break;

    switch (strtolower($opt)) {
        case 'n':
            $nextRoom = $room[$currentRoom->getRoomOrder()]['north'];
            break;
        case 'e':
            $nextRoom = $room[$currentRoom->getRoomOrder()]['east'];
            break;
        case 's':
            $nextRoom = $room[$currentRoom->getRoomOrder()]['south'];
            break;
        case 'w':
            $nextRoom = $room[$currentRoom->getRoomOrder()]['west'];
            break;
    }

    if ($nextRoom == NULL) {
        echo "\nNo room found\n\n";
    }

    if ($nextRoom != NULL) {
        echo 'Next room: ' . $nextRoom->getRoomName() . "\n";
        $currentRoom = $nextRoom;
    }    
}

// $currentRoom = $room['secondRoom']['currentRoom'];
// echo $currentRoom->getRoomOrder() . "\n";