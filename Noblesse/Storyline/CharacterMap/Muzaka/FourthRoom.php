<?php

namespace Noblesse\Storyline\CharacterMap\Muzaka;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Storyline\Map;

class FourthRoom extends Map
{
    public function __construct()
    {
        parent::__construct(
            'Vault',
            2,
            2,
            ['Found'],
            ['notFound'],
            ['notFound'],
            ['notFound']
        );
    }
}