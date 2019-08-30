<?php

namespace Noblesse\Storyline\Frankenstein;

use Noblesse\Storyline\Map;

class FourthRoom extends Map
{
    public function __construct()
    {
        parent::__construct(
            'Balcony',
            2,
            2,
            [],
            ['found'],
            [],
            []
        );
    }
}