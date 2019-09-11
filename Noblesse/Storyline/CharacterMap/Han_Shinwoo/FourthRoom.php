<?php

namespace Noblesse\Storyline\CharacterMap\Han_Shinwoo;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Storyline\Map;

class FourthRoom extends Map
{
    public function __construct()
    {
        parent::__construct(
            'Drawing Room',
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
           |  As obvious as it is, just give the    |
           |  ramen to him. To end your misery.     |
            ----------------------------------------\n
MSG;

        return $signBoard;
    }

    public function wakeUpNoblesse(string $itemMerged): bool
    {
        if ($itemMerged !== 'prepared cooked ramen') return true;

        echo "\t    What does have these things to do with him?!\n";
        echo "\t    (The phantom has given you a task to defeat the Noblesse)\n";
        return false;
    }

    public function roomDialogue(): void
    {
        echo "\nSo this is the guy in my dreams. He is so white.\n";
    }
}