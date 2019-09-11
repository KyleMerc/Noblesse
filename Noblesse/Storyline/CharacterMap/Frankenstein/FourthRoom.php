<?php

namespace Noblesse\Storyline\CharacterMap\Frankenstein;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Storyline\Map;

class FourthRoom extends Map
{
    public function __construct()
    {
        parent::__construct(
            'Balcony',
            2,
            2,
            'fourthRoom',
            true
        );
    }

    public function readSign(): string
    {
        $signBoard = <<<MSG
            \n
            ----------------------------------------
           |                 HINT                   |
           |  Give him a nice warm ramen noodles.   |
           |  If something is missing. Goodluck     |
            ----------------------------------------\n
MSG;

        return $signBoard;
    }

    public function wakeUpNoblesse(string $itemMerged): bool
    {
        if ($itemMerged === 'prepared cooked ramen') return true;

        echo "\t    Am I missing something?!\n";
        echo "\t    (The phantom has given you a task to defeat the Noblesse)\n";
        return false;
    }

    public function roomDialogue(): void
    {
        echo "\n\t    There should be something to wake him up.\n";
    }
}