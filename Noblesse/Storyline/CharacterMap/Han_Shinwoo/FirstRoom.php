<?php

namespace Noblesse\Storyline\CharacterMap\Han_Shinwoo;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Storyline\Map;

class FirstRoom extends Map
{

    public function __construct()
    {
        parent::__construct(
            'Lower Main Hall',
            2,
            1,
            'firstRoom',
            false
        );
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
}