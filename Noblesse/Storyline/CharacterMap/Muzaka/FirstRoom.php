<?php

namespace Noblesse\Storyline\CharacterMap\Muzaka;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Storyline\Map;

class FirstRoom extends Map
{
    private $items;

    public function __construct()
    {
        parent::__construct(
            'Basement',
            2,
            1,
            'firstRoom',
            false
        );

        $this->items[] = 'ramen';
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
           |  There is a box full of ramen pack      |
           |  noodles. Comes with a handy plastick   |
           |  chopsticks. Now its obvious.           |
           |  Type [grab] command.                   |
            -----------------------------------------\n
MSG;

        return $signBoard;
    }
}