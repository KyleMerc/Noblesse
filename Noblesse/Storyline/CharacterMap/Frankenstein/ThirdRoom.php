<?php

namespace Noblesse\Storyline\CharacterMap\Frankenstein;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Storyline\Map;

class ThirdRoom extends Map
{
    private $items;

    public function __construct()
    {
        parent::__construct(
            'Bedroom',
            3,
            1,
            'thirdRoom',
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
            ----------------------------------------
           |                 HINT                   |
           |  A dusty bowl is on the table. It needs|
           |  to be washed. Get the item.           |
           |  Type [grab] command.                  |
            ----------------------------------------\n
MSG;

        return $signBoard;
    }

    public function roomDialogue(): void
    {
        echo "\n\t    The sheets has been folded. Where is he?\n";
    }
}