<?php

require_once "Noblesse/start.php";

use Noblesse\Utility\MainUtil as Char;
use Noblesse\Utility\Status;
use Noblesse\Utility\ExploreRoom;
use Noblesse\Dialogue\IntroDialogue as Intro;

while (true) {
    $pickChar   = Intro::startingMenu();

    if ($pickChar == 'h' || $pickChar == 'f' || $pickChar == 'm2' || $pickChar == 'm') {
        break;
        
    }
    echo "\nUnknown command...\n";
    continue;
}

$mainChar   = Char::mainCharacter($pickChar);
$room       = new ExploreRoom($mainChar);

$introDialogue =  Intro::introDialogue($mainChar->getName());

echo $introDialogue['intro'];
echo $introDialogue['charIntro'];

$cmdOpt     = "\n   ---Command Options---
[hint]      Read signboard hint
[status]    Show character status
[travel]    Go to the next room
[grab]      Grab an item
[inventory] Check storage
[unlock]    Unlock door
[wakeup]    WakeUp the Noblesse in the final room.
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
        case 'hint':
            echo $room->currentRoom()->readSign();
            break;
        case 'status':
            echo Status::status($mainChar, $room->currentRoom());
            break;
        case 'grab':
            $noFourthRoom   = $room->currentRoom()->getRoomOrder();
            $itemExists     = false;

            if ($mainChar->getItems() != false) {
                foreach ($room->currentRoom()->getItems() as $item) {
                    if (in_array($item, $mainChar->getItems())) {
                        $itemExists = true;
                        break;
                    }
                }
            }

            if ($itemExists) {
                echo "\nYou already have the item\n";
                break;
            }

            if ($noFourthRoom != 'fourthRoom') {
                $mainChar->grab($room->currentRoom()->getItems());
            } else echo "\nThere are no items here\n";
            
            
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
            $regexDirection = '/^[^a-z0-9]*([news])[^a-z0-9]*$/';

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

            case 'wakeup':
                $checkItems     = 0;
                $importantItems = ['ramen', 'teapot', 'coffeemug', 'chopsticks', 'bowl'];
                $wakingStatus   = false;
                foreach ($mainChar->getItems() as $item) {
                    if (in_array($item, $importantItems)) $checkItems += 25;
                }

                if ($room->currentRoom()->getRoomOrder() != 'fourthRoom') {
                    echo "\nHe is not here\n";
                    break;
                }

                if ($checkItems == 100) 
                    $wakingStatus = $room->currentRoom()->wakeUpNoblesse('prepared cooked ramen');
                else 
                    $wakingStatus = $room->currentRoom()->wakeUpNoblesse('');

                if ($wakingStatus) {
                    echo "\n\t    You have given him his favorite ramen!\n";
                    echo "\nCongratulations... You have finished the game\n";
                    die;
                }
                else {
                    sleep(1);
                    echo "\n";
                    $resetBoss = Char::battleStart($mainChar, Char::enemyCharacter('b'), true);

                    if ($resetBoss == 'flee') {
                        echo "\t    You're going back to the last room";
                        switch ($mainChar->getName()) {
                            case 'Frankenstein':
                                $room->nextRoom($room->currentRoom()->east());
                                break;
                                case 'Han Shinwoo':
                                $room->nextRoom($room->currentRoom()->north());
                                break;
                                case 'Muzaka':
                                $room->nextRoom($room->currentRoom()->north());
                                break;
                                case 'M-21':
                                $room->nextRoom($room->currentRoom()->south());
                                break;
                                
                        }
                        break;
                    }

                    echo "\nBad ending...\n";
                    die;
                }

                break;
        default:
            echo "\nUnknown command...\n";
    }
}
    
    

