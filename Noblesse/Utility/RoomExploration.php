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

    private function setupRooms()
    {
        $currentRoom = $this->rooms;
        $this->currentRoom = $currentRoom['firstRoom']['currentRoom'];
        
        return $this->rooms;
    }

    public function roomStart()
    {
        $nextRoom           = NULL;
        $room               = $this->setupRooms();
        $regexDirection     = '/^[^a-z0-9]*([newsq])[^a-z0-9]*$/';

        while (true) {
            echo "Current Room: " . $this->currentRoom->getRoomName() . "\n";
            
            $availableRooms = '';

            if ($room[$this->currentRoom->getRoomOrder()]['north']) {
                $roomName = $room[$this->currentRoom->getRoomOrder()]['north']->getRoomName();
                $availableRooms  .= 'North: ' . $roomName . "\n";
            }
                
            if ($room[$this->currentRoom->getRoomOrder()]['east']) {
                $roomName = $room[$this->currentRoom->getRoomOrder()]['east']->getRoomName();
                $availableRooms  .= 'East: '  . $roomName  . "\n";
            }
                
            if ($room[$this->currentRoom->getRoomOrder()]['south']) {
                $roomName = $room[$this->currentRoom->getRoomOrder()]['south']->getRoomName();
                $availableRooms  .= 'South: ' . $roomName . "\n";
            }
                
            if ($room[$this->currentRoom->getRoomOrder()]['west']) {
                $roomName = $room[$this->currentRoom->getRoomOrder()]['west']->getRoomName();
                $availableRooms  .= 'West: '  . $roomName  . "\n";
            }
            echo $availableRooms;

            $opt = readline("\nWhere to go?\n[n]/[e]/[s]/[w] or quit [q]: ");

            if (preg_match($regexDirection, $opt) == 0) {
                echo "\nInvalid command...\n\n";
            }
            
            if ($opt === 'q') break;

            switch (strtolower($opt)) {
                case 'n':
                    $nextRoom = $room[$this->currentRoom->getRoomOrder()]['north'];
                    break;
                case 'e':
                    $nextRoom = $room[$this->currentRoom->getRoomOrder()]['east'];
                    break;
                case 's':
                    $nextRoom = $room[$this->currentRoom->getRoomOrder()]['south'];
                    break;
                case 'w':
                    $nextRoom = $room[$this->currentRoom->getRoomOrder()]['west'];
                    break;
            }


            if ($nextRoom === NULL) {
                echo "Room not found\n";
            }

            if ($nextRoom !== NULL && $nextRoom->isDoorLocked() === false) $this->currentRoom = $nextRoom;
            else echo "Door is locked\n\n";
        }

    }

    public function getCurrentRoom()
    {
        return $this->currentRoom;
    }
}
$room = new RoomExploration('Frankenstein');
$room->roomStart();
$currentRoom = $room->getCurrentRoom();
echo "\n\n" . $currentRoom->getRoomName() . "\n\n";