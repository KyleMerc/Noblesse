<?php

namespace Noblesse\Storyline\CharacterMap\M_21;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Storyline\Map;

class SecondRoom extends Map
{
    public function __construct()
    {
        parent::__construct(
            'Gallery',
            1,
            2,
            ['found'],
            ['notFound'],
            ['found'],
            ['found']
        );
    }
}