<?php

namespace Noblesse\Storyline\CharacterMap\Muzaka;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Storyline\Map;

class ThirdRoom extends Map
{
    private $items;

    public function __construct()
    {
        parent::__construct(
            'Great Hall',
            3,
            1,
            'thirdRoom',
            true
        );

        $this->items[] = 'picture';
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
           |  Just enjoy the beautiful scenery of    |
           |  this place. Isn't it nice?             |
            -----------------------------------------\n
MSG;

        return $signBoard;
    }

    public function roomDialogue(): void
    {
        echo "\nAhhhh where is he anyway.\n";
    }
}