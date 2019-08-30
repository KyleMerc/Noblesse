<?php

namespace Noblesse\Storyline\Frankenstein;

use Noblesse\Storyline\Map;

class SecondRoom extends Map
{
    public function __construct()
    {
        parent::__construct(
            'Kitchen',
            1,
            2,
            [],
            [],
            [],
            ['found']
        );
    }
}