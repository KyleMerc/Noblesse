<?php

namespace Noblesse\Character\CharacterType;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Character\ModifiedHuman;

class SimpleModifiedHuman extends ModifiedHuman
{   
    /**
     * Default Character creation is Main Character
     */
    public function __construct()
    {
        parent::__construct('M-21', 'ModifiedHuman', 'Gun', 20, 30, 'Simple');
    }
}