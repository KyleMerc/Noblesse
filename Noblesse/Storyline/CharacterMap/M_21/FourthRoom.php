<?php

namespace Noblesse\Storyline\CharacterMap\M_21;

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
            -----------------------------------------
           |                 HINT                    |
           |  It's better to give him the best       |
           |  ramen noodle or else...                |
            -----------------------------------------\n
MSG;

        return $signBoard;
    }

    public function wakeUpNoblesse(string $itemMerged): bool
    {
        if ($itemMerged !== 'ramen') return true;

        echo "\t    Weird. I really did not expect this.\n";
        echo "\t    (The phantom has given you a task to defeat the Noblesse)\n";
        return false;
    }
}