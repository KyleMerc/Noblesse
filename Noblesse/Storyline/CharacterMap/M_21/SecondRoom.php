<?php

namespace Noblesse\Storyline\CharacterMap\M_21;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Storyline\Map;

class SecondRoom extends Map
{
    private $items;

    public function __construct()
    {
        parent::__construct(
            'Gallery',
            1,
            2,
            'secondRoom',
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
            -----------------------------------------
           |                 HINT                    |
           |  There are chopsticks on that cup       |
           |  I think you know what this is.         |
           |  Type [grab] command.                   |
            -----------------------------------------\n
MSG;

        return $signBoard;
    }

    public function roomDialogue(): void
    {
        echo "\nSo this is his face. Way too foreign to me.\n";
    }
}