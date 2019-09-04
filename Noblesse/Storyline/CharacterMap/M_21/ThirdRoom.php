<?php

namespace Noblesse\Storyline\CharacterMap\M_21;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Storyline\Map;

class ThirdRoom extends Map
{
    public function __construct()
    {
        parent::__construct(
            'Rest Room',
            3,
            1,
            'thirdRoom',
            ['found'],
            ['notFound'],
            ['notFound'],
            ['notFound']
        );
    }
}