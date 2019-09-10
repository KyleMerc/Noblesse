<?php

namespace Noblesse\Utility;

require_once $_SERVER['DOCUMENT_ROOT'] . 'Noblesse/start.php';

use Noblesse\Storyline\Factory\NewRoomFactory;
use Noblesse\Storyline\Interfaces\DirectionInterface;

class ExploreRoom
{
    private $currentRoom;
    private $roomSetup;
    private static $regexDirection = '/^[^a-z0-9]*([newsq])[^a-z0-9]*$/';

    /**
     * Setup the character rooms
     * 
     * @param string $mainCharName
     * @return void
     */
    public function __construct(string $mainCharName)
    {
        $this->roomSetup    = NewRoomFactory::setCharRooms($mainCharName);
        $this->currentRoom  = $this->roomSetup['firstRoom'];
    }

    /**
     * Return current Room
     * 
     * @return \Noblesse\Storyline\Map
     */
    public function currentRoom()
    {
        return $this->currentRoom;
    }

    /**
     * Set to the next room
     * 
     * @param \Noblesse\Storyline\Interfaces\DirectionInterface
     * @return void
     */
    public function nextRoom(DirectionInterface $nextRoom)
    {
        $this->currentRoom = $nextRoom;
    }

    public function lockedRooms() {
        $north          = $this->currentRoom->north();
        $east           = $this->currentRoom->east();
        $south          = $this->currentRoom->south();
        $west           = $this->currentRoom->west();
        $lockedRoomMsg  = '';

        if ($north && $north->isDoorLocked())  $lockedRoomMsg .= "\tNorth:" . $north->getRoomName() . "\n";
        if ($east  && $east->isDoorLocked())   $lockedRoomMsg .= "\tEast:" . $east->getRoomName() . "\n";
        if ($south && $south->isDoorLocked())  $lockedRoomMsg .= "\tSouth:" . $south->getRoomName() . "\n";
        if ($west  && $west->isDoorLocked())   $lockedRoomMsg .= "\tWest:" . $west->getRoomName() . "\n";

        if($lockedRoomMsg == '') return true;

        echo "\tLocked Rooms: \n";
        echo "\tOptions: [n]/[e]/[s]/[w]\n";
        echo "\t-----------------\n";
        echo $lockedRoomMsg;
        echo "\t-----------------\n";
    }

    /**
     * Room menu for travelling to the rooms.
     * 
     * @return void
     */
    public function roomMenu()
    {
        $noRoomMsg = "
            ---------------
            |No Room Found|
            ---------------\n
        ";

        while (true) {
            $north       = $this->currentRoom->north();
            $east        = $this->currentRoom->east();
            $south       = $this->currentRoom->south();
            $west        = $this->currentRoom->west();
            

            $availableRooms = '';
            if ($north) $availableRooms .= "\tNorth: " . $north->getRoomName() . "\n";
            if ($east)  $availableRooms .= "\tEast:  " . $east->getRoomName() . "\n";
            if ($south) $availableRooms .= "\tSouth: " . $south->getRoomName() . "\n";
            if ($west)  $availableRooms .= "\tWest:  " . $west->getRoomName() . "\n";

            echo "\n\nAdjacent Rooms:\n";
            echo "\t-----------------\n";
            echo $availableRooms;
            echo "\t-----------------\n\n";

            $opt = readline("Where to go?\n[n]/[e]/[s]/[w] or Go back [q]: ");

            if (preg_match(self::$regexDirection, $opt) == 0) {
                echo "\nInvalid command...\n\n";
            }

            if (strtolower($opt) === 'q') break;

            switch ($opt) {
                case 'n':
                    if ($north) {
                        if ($north->isDoorLocked()) {
                            echo "\nDoor is locked!\n";
                            break;
                        }

                        $this->nextRoom($north);
                    } else echo $noRoomMsg;

                    break;
                case 'e':
                    if ($east) {
                        if ($east->isDoorLocked()) {
                            echo "\nDoor is locked!\n";
                            break;
                        }

                        $this->nextRoom($east);
                    } else echo $noRoomMsg;

                    break;
                case 's':
                    if ($south) {
                        if ($south->isDoorLocked()) {
                            echo "\nDoor is locked!\n";
                            break;
                        }

                        $this->nextRoom($south);
                    } else echo $noRoomMsg;

                    break;
                case 'w':
                    if ($west) {
                        if ($west->isDoorLocked()) {
                            echo "\nDoor is locked!\n";
                            break;
                        }

                        $this->nextRoom($west);
                    } else echo $noRoomMsg;

                    break;
            }
        }
    }
}