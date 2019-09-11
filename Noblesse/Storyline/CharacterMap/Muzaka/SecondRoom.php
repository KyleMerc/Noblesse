<?php

namespace Noblesse\Storyline\CharacterMap\Muzaka;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Storyline\Map;

class SecondRoom extends Map
{
    private $items;

    public function __construct()
    {
        parent::__construct(
            'Kitchen',
            1,
            2,
            'secondRoom',
            false
        );

        $this->items[] = 'teapot';
        $this->items[] = 'bowl';
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function readSign(): string
    {
        $signBoard = <<<MSG
            \n
            -----------------------------------------
           |                 HINT                    |
           |  Store the hot water in the teapot and  |
           |  take it.                               |
           |  Take also the bowl.                    |
           |  Type [grab] command.                   |
            -----------------------------------------\n
MSG;

        return $signBoard;
    }

    public function roomDialogue(): void
    {
        echo "\n\t    He really love this part of his mansion.\n";
    }
}