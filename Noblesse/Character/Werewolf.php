<?php

namespace Noblesse\Character;

require $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

class Werewolf extends Character
{
    /**
     * Default Character creation is Main Character
     */
    public function __construct()
    {
        parent::__construct('Muzaka', 'Werewolf', 'Strong Punch', rand(25, 45));
    }
}