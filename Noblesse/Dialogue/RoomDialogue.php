<?php

namespace Noblesse\Dialogue;

function FrankRooms(string $opt): string {
    $dialogue = '';
    
    switch ($opt) {
        case 'firstRoom':
            $dialogue = "I have to look for clues somehow.";
            break;
        case 'secondRoom':
            $dialogue = "Hmmm. I think there is something in there.";
            break;
        case 'thirdRoom':
            $dialogue = 'What a nice view. I envy this guy';
            break;
        case 'fourthRoom':
            $dialogue = 'There should be something to wake him up';
            break;
    }

    return $dialogue;
}