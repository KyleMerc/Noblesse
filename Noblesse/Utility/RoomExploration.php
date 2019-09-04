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
    public function goToRoom(Map $currentRoom, string $direction)
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

        switch (true) {
            case $currentRoom['']:
                return 'Im alive!!';
        }
    }

    public function explore()
    {
        return $this->rooms;
    }
}

$rooms = new RoomExploration('Frankenstein');
$room = $rooms->explore();

$opt = 'n';
while (preg_match('/^[^a-z0-9]*([news])[^a-z0-9]*$/', $opt) > 0) {
    $opt = readline('Where to go?[n]/[e]/[s]/[w]:  ');

    switch (strtolower($opt)) {
        case 'n':
            // if ($room) {

            // }
            echo 'north'; break;
        case 'e':
            echo 'east'; break;
        case 's':
            echo 'south'; break;
        case 'w':
            echo 'west'; break;
        default:
            break;
    }
}


// echo preg_match('/^[^a-z0-9]*([news])[^a-z0-9]*$/', $opt) . "\n";