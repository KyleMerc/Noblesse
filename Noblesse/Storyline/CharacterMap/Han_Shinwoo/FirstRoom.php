<?php

namespace Noblesse\Storyline\CharacterMap\Han_Shinwoo;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Storyline\Map;

class FirstRoom extends Map
{
    private $items;

    public function __construct()
    {
        parent::__construct(
            'Lower Main Hall',
            2,
            1,
            'firstRoom',
            false
        );

        $this->items[] = 'teapot';
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
           |  As you noticed there is a teapot that |
           |  has been recently used. Worth to take |
           |  it.                                   |
           |  Type [grab] command.                  |
            ----------------------------------------\n
MSG;

        return $signBoard;
    }

    public function roomDialogue(): void
    {
        echo "\nWe have to find a way to get out in here.\n";
    }
}