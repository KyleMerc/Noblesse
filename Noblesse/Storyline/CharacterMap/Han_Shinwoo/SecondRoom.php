<?php

namespace Noblesse\Storyline\CharacterMap\Han_Shinwoo;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Storyline\Map;

class SecondRoom extends Map
{
    public function __construct()
    {
        parent::__construct(
            'Dining Room',
            1,
            2,
            'secondRoom',
            false
        );
    }
}