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
[quit]      Quit game
----------------------------\n";
$atkStatus = '';

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
                if ($room->currentRoom()->getRoomOrder() == 'firstRoom') continue;

                echo "\nAn enemy has been detected.\n";
                $atkOpt = readline("Would you like to attack?[y] / [n]: ");

                if ($atkOpt == 'y') 
                    $atkStatus = $room->currentRoom()->enemySpawn($mainChar, Char::enemyCharacter('v'));
                if ($atkOpt == 'n') break;
            }

            break;
        default:
            echo "\nUnknown command...\n";
    }
}
    
    

