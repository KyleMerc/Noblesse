<?php

namespace Noblesse\Storyline\Frankenstein;

use Noblesse\Storyline\Map;

class ThirdRoom extends Map
{
    public function __construct()
    {
        parent::__construct(
            'Bedroom',
            3,
            1,
            ['found'],
            [],
            [],
            []
        );
    }
}