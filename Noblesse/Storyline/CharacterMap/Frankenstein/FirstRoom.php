<?php

namespace Noblesse\Storyline\CharacterMap\Frankenstein;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Storyline\Map;

class FirstRoom extends Map
{

    public function __construct()
    {
        parent::__construct(
            'Upper Main Floor',
            2,
            1,
            'firstRoom',
            false
        );
    }

    public function readSign(): string
    {
        $signBoard = <<<MSG
            \n
            ----------------------------------------
           |                 HINT                   |
           |  There is a golden chopstick hanged on |
           |  on the wall with a frame. You can grab|
           |  that item. Type [grab] command.       |
            ----------------------------------------\n
MSG;

        return $signBoard;
    }
}