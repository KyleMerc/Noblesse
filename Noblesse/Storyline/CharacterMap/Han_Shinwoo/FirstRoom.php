<?php

namespace Noblesse\Storyline\CharacterMap\Han_Shinwoo;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Storyline\Map;

class FirstRoom extends Map
{

    public function __construct()
    {
        parent::__construct(
            'Basement',
            2,
            1,
            ['notFound'],
            ['found'],
            ['found'],
            ['notFound']
        );
    }
}