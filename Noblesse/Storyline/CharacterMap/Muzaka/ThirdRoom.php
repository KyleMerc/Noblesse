<?php

namespace Noblesse\Storyline\CharacterMap\Muzaka;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Storyline\Map;

class ThirdRoom extends Map
{
    public function __construct()
    {
        parent::__construct(
            'Great Hall',
            3,
            1,
            'thirdRoom',
            ['notFound'],
            ['notFound'],
            ['found'],
            ['found']
        );
    }
}