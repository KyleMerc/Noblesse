<?php

require_once "Noblesse/start.php";

use Noblesse\Utility\MainUtil as Char;
use Noblesse\Utility\Status;
use Noblesse\Utility\ExploreRoom;
use Noblesse\Dialogue\IntroDialogue as Intro;

$pickChar   = Intro::startingMenu();

$mainChar   = Char::mainCharacter($pickChar);
$room       = new ExploreRoom($mainChar->getName());

$introDialogue =  Intro::introDialogue($mainChar->getName());

echo $introDialogue['intro'];
echo $introDialogue['charIntro'];

$cmdOpt     = "\n---Command Options--
[status]    Show character status
[travel]    Go to the next room
[inventory] Check storage
[unlock]    Unlock door
[quit]      Quit game
----------------------------\n";
$atkStatus = '';

/**
 * I have put the menu in a loop so that it's recurring.
 */
while (true) {
    echo "\n\nTo know the command type [help]\n";

    $opt = readline("Enter a command: ");

    if (strtolower($opt) === 'quit') {
        echo "\nGoodbye!!!\n";
        break;
    }

    if ($atkStatus === 'game over') {
        echo "---GAME OVER---";
        break;
    }

    switch (strtolower($opt)) {
        case 'help':
            echo $cmdOpt;
            break;
        case 'status':
            echo Status::status($mainChar, $room->currentRoom());
            break;
        case 'travel':
            $room->roomMenu();

            $enemySpawn = rand(1, 100);
            if ($enemySpawn <= 30) {
                $roomOrder = $room->currentRoom()->getRoomOrder();
                if ($roomOrder == 'firstRoom' || $roomOrder == 'fourthRoom') continue;

                echo "\nAn enemy has been detected.\n";
                $atkOpt = readline("Would you like to attack?[y] / [n]: ");

                if ($atkOpt == 'y') 
                    $atkStatus = $room->currentRoom()->enemySpawn($mainChar, Char::enemyCharacter('v'));
                if ($atkOpt == 'n') break;
            }

            break;
        case 'inventory':
            echo "Available Items:\n";
            if ($mainChar->getItems() == false) echo "No items found\n";

            foreach ($mainChar->getItems() as $items) {
                echo "* " . $items . "\n";
            }
            break;
        case 'unlock':
            $noLockedRoom = $room->lockedRooms();

            if ($noLockedRoom) {
                $openDoor = readline("Which door to unlock?: ");

                $key = in_array('key', $mainChar->getItems());
                
                if (!$key) { //If key is not found
                    echo "You have no key";
                    break;
                }
                
                //Set key to false to mark it not isLocked
                $room->currentRoom()->openDoor(! $key, $openDoor); 

                break;
            } else echo "\nNo found locked rooms\n";

            
            break;
        default:
            echo "\nUnknown command...\n";
    }
}
    
    

