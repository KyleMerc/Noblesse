<?php

namespace Noblesse\Storyline\CharacterMap\M_21;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Storyline\Map;

class ThirdRoom extends Map
{
    private $items;

    public function __construct()
    {
        parent::__construct(
            'Rest Room',
            3,
            1,
            'thirdRoom',
            false
        );

        $this->items[] = 'coffemug';
        $this->items[] = 'ramen';
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
           |  There is a hot boiled water in the     |
           |  coffe mug.                             |
           |  Inside in that bag there's a pack of   |
           |  ramen noodles.                         |
           |  Type [grab] command.                   |
            -----------------------------------------\n
MSG;

        return $signBoard;
    }    
}