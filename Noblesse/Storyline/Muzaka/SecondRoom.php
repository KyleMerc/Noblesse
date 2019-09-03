<?php

namespace Noblesse\Storyline\Muzaka;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Storyline\Map;

class SecondRoom extends Map
{
    public function __construct()
    {
        parent::__construct(
            'Kitchen',
            1,
            2,
            ['notFound'],
            ['found'],
            ['notFound'],
            ['notFound']
        );
    }
}