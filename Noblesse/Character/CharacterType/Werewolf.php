<?php

namespace Noblesse\Character\CharacterType;

require $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Character\Character;

class Werewolf extends Character
{
    /**
     * Default Character creation is Main Character
     */
    public function __construct()
    {
        parent::__construct('Muzaka', 'Werewolf', 'Strong Punch', 25, 45);
    }
}