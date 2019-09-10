<?php

namespace Noblesse\Storyline\CharacterMap\Han_Shinwoo;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Storyline\Map;

class ThirdRoom extends Map
{
    public function __construct()
    {
        parent::__construct(
            'Secret Room',
            3,
            1,
            'thirdRoom',
            true
        );
    }

    public function readSign(): string
    {
        $signBoard = <<<MSG
            \n
            -----------------------------------------
           |                 HINT                    |
           |  There is a chopstick in the drawer.    |
           |  Take it. Type [grab] command.          |
            -----------------------------------------\n
MSG;

        return $signBoard;
    }
}