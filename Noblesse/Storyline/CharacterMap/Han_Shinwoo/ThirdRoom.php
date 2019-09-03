<?php

namespace Noblesse\Storyline\CharacterMap\Han_Shinwoo;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Storyline\Map;

class ThirdRoom extends Map
{
    public function __construct()
    {
        parent::__construct(
            'Secret Room',
            3,
            1,
            ['notFound'],
            ['found'],
            ['notFound'],
            ['notFound']
        );
    }
}