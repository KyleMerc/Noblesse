<?php

namespace Noblesse\Character\CharacterType;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Character\ModifiedHuman;

class SuperModifiedHuman extends ModifiedHuman
{
    /**
     * Default Character creation is Main Character
     */
    public function __construct()
    {
        parent::__construct('Frankenstein', 'ModifiedHuman', 'Dark Spear', 30, 50, 'Super');
    }
}