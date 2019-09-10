<?php

namespace Noblesse\Storyline\CharacterMap\Frankenstein;

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
            'fourthRoom',
            true
        );
    }

    public function wakeUpNoblesse(string $item): bool
    {

        echo "Am I missing something?!\n";
        echo "The phantom has given you a task to defeat the Noblesse";
        return false;
    }
}