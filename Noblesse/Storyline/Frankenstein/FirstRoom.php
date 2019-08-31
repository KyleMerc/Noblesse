<?php

namespace Noblesse\Storyline\Frankenstein;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Storyline\Map;

class FirstRoom extends Map
{

    public function __construct()
    {
        parent::__construct(
            'Upper Main Floor',
            2,
            1,
            [],
            ['found' , true],
            ['found' , false],
            ['found' , true]
        );
    }
}

$obj = new FirstMap();
echo $obj->getRoomName();