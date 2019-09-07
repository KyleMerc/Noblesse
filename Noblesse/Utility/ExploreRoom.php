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

    public function __construct(string $mainCharname)
    {
        $this->roomSetup    = NewRoomFactory::setCharRooms($mainCharname);
        $this->currentRoom  = $this->roomSetup['firstRoom'];
    }

    public function currentRoom()
    {
        return $this->currentRoom;
    }

    public function nextRoom(DirectionInterface $nextRoom)
    {
        $this->currentRoom = $nextRoom;
    }

    public function roomStart()
    {
        while (true) {
            echo "\nCurrent Room:" . $this->currentRoom->getRoomName() . "\n\n";

            $north  = $this->currentRoom->north();
            $east   = $this->currentRoom->east();
            $south  = $this->currentRoom->south();
            $west   = $this->currentRoom->west();

            $availableRooms = '';
            if ($north) $availableRooms .= "North: " . $north->getRoomName() . "\n";
            if ($east)  $availableRooms .= "East: " . $east->getRoomName() . "\n";
            if ($south) $availableRooms .= "South: " . $south->getRoomName() . "\n";
            if ($west)  $availableRooms .= "West: " . $west->getRoomName() . "\n";

            echo "Adjacent Rooms:\n" . $availableRooms . "\n";

            $opt = readline("Where to go?\n[n]/[e]/[s]/[w] or quit [q]: ");

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
                    } else echo "\nNo room found\n";

                    break;
                case 'e':
                    if ($east) {
                        if ($east->isDoorLocked()) {
                            echo "\nDoor is locked!\n";
                            break;
                        }

                        $this->nextRoom($east);
                    } else echo "\nNo room found\n";

                    break;
                case 's':
                    if ($south) {
                        if ($south->isDoorLocked()) {
                            echo "\nDoor is locked!\n";
                            break;
                        }

                        $this->nextRoom($south);
                    } else echo "\nNo room found\n";

                    break;
                case 'w':
                    if ($west) {
                        if ($west->isDoorLocked()) {
                            echo "\nDoor is locked!\n";
                            break;
                        }

                        $this->nextRoom($west);
                    } else echo "\nNo room found\n";

                    break;
            }
        }
    }
}