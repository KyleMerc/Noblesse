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

//I have to rearrange this for tomorrow
//You can change the map by changing the character name: M-21, Han Shinwoo, Muzaka, Frankenstein
$roomSetup      = new RoomExploration('Han Shinwoo');

$room           = $roomSetup->getRooms();
$roomNumber     = array_keys($room);
$regexDirection = '/^[^a-z0-9]*([newsq])[^a-z0-9]*$/';
$nextRoom;


// Starting room
$currentRoom = $room['firstRoom']['currentRoom'];

while (true) {
    echo "Current Room: " . $currentRoom->getRoomName() . "\n\n";
    
    $availableRooms = '';
    
    if ($room[$currentRoom->getRoomOrder()]['north']) 
        $availableRooms  .= 'North: ' . $room[$currentRoom->getRoomOrder()]['north']->getRoomName() . "\n";
    if ($room[$currentRoom->getRoomOrder()]['east'])  
        $availableRooms  .= 'East: '  . $room[$currentRoom->getRoomOrder()]['east']->getRoomName()  . "\n";
    if ($room[$currentRoom->getRoomOrder()]['south']) 
        $availableRooms  .= 'South: ' . $room[$currentRoom->getRoomOrder()]['south']->getRoomName() . "\n";
    if ($room[$currentRoom->getRoomOrder()]['west'])  
        $availableRooms  .= 'West: '  . $room[$currentRoom->getRoomOrder()]['west']->getRoomName()  . "\n";

    echo $availableRooms;
    

    $opt = readline("\nWhere to go?\n[n]/[e]/[s]/[w] or quit [q]: ");

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
        $currentRoom = $nextRoom;
    }

    if (preg_match($regexDirection, $opt) == 0) {
        echo "Invalid command...\n";
    }
}