<?php

namespace Noblesse\Dialogue;

function FrankRooms(string $opt): string {
    $dialogue = '';
    
    switch ($opt) {
        case 'firstRoom':
            $dialogue = "I suppose I have to something in here.";
            break;
        case 'secondRoom':
            $dialogue = "Hmmm. This place is clean, weird.";
            break;
        case 'thirdRoom':
            $dialogue = 'The sheets has been folded. Where is he?';
            break;
        case 'fourthRoom':
            $dialogue = 'There should be something to wake him up';
            break;
    }

    return $dialogue;
}