<?php

namespace Noblesse\Storyline\CharacterMap\M_21;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Storyline\Map;

class FirstRoom extends Map
{

    public function __construct()
    {
        parent::__construct(
            'Entrance Hall',
            2,
            1,
            ['notFound'],
            ['found'],
            ['notFound'],
            ['notFound']
        );
    }
}