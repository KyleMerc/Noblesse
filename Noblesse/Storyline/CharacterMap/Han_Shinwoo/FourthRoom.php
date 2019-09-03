<?php

namespace Noblesse\Storyline\CharacterMap\Han_Shinwoo;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Storyline\Map;

class FourthRoom extends Map
{
    public function __construct()
    {
        parent::__construct(
            'Drawing Room',
            2,
            2,
            ['Found'],
            ['notFound'],
            ['notFound'],
            ['notFound']
        );
    }
}