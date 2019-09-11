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
            'fourthRoom',
            true
        );
    }

    public function wakeUpNoblesse(string $itemMerged): bool
    {
        if ($itemMerged !== 'cooked ramen') return true;

        echo "\t    Am I missing something?!\n";
        echo "\t    (The phantom has given you a task to defeat the Noblesse)\n";
        return false;
    }
    
}