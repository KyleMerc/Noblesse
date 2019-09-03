<?php

namespace Noblesse\Storyline\Muzaka;

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
            ['notFound'],
            ['notFound'],
            ['found'],
            ['found']
        );
    }
}