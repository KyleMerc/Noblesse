<?php

namespace Noblesse\Storyline\CharacterMap\Han_Shinwoo;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Storyline\Map;

class SecondRoom extends Map
{
    private $items;

    public function __construct()
    {
        parent::__construct(
            'Dining Room',
            1,
            2,
            'secondRoom',
            false
        );

        $this->items[] = 'ramen';
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
           |  A pack of ramen noodle was left unused.|
           |  Also a bowl was aside to it. Take them |
           |  both. Type [grab] command.             |
            -----------------------------------------\n
MSG;

        return $signBoard;
    }

    public function roomDialogue(): void
    {
        echo "\n\t    Is anyone hungry? There are a lots of food here.\n";
    }
}