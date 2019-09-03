<?php

namespace Noblesse\Storyline\Frankenstein;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Storyline\Map;

class FourthRoom extends Map
{
    public function __construct()
    {
        parent::__construct(
            'Balcony',
            2,
            2,
            ['notFound'],
            ['found'],
            ['notFound'],
            ['notFound']
        );
    }
}