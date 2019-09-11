<?php

namespace Noblesse\Storyline\CharacterMap\M_21;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Storyline\Map;

class FirstRoom extends Map
{
    private $items;

    public function __construct()
    {
        parent::__construct(
            'Entrance Hall',
            2,
            1,
            'firstRoom',
            false
        );

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
           |  A bowl appeared on the small table.    |
           |  Take it for you might it need later.   |
           |  Type [grab] command.                   |
            -----------------------------------------\n
MSG;

        return $signBoard;
    }

    public function roomDialogue(): void
    {
        echo "\nThis is place is so majestic...\n";
    }
}