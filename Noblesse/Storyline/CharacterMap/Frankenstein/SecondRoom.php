<?php

namespace Noblesse\Storyline\CharacterMap\Frankenstein;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Storyline\Map;

class SecondRoom extends Map
{
    public function __construct()
    {
        parent::__construct(
            'Kitchen',
            1,
            2,
            'secondRoom',
            false
        );
    }

    public function readSign(): string
    {
        $signBoard = <<<MSG
            \n
            ----------------------------------------
           |                 HINT                   |
           |  You really need a hotwater for obvious|
           |  reasons.                              |
           |  There is a packed of ramen noodle     |
           |  inside the drawer.                    |
           |  You can grab the 2 items.             |
           |  Type [grab] command.                  |
            ----------------------------------------\n
MSG;

        return $signBoard;
    }
}