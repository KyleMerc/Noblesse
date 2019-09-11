<?php

namespace Noblesse\Storyline\CharacterMap\Frankenstein;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Storyline\Map;

class FirstRoom extends Map
{
    private $items;

    public function __construct()
    {
        parent::__construct(
            'Upper Main Floor',
            2,
            1,
            'firstRoom',
            false
        );

        $this->items[] = 'chopsticks';
    }
    
    public function getItems(): array
    {
        return $this->items;
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

    public function roomDialogue(): void
    {
        echo "\n\t    I suppose I have to something in here.\n";
    }
}