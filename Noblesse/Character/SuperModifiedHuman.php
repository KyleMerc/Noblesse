<?php

namespace Noblesse\Character;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

class SuperModifiedHuman extends Character implements ModifiedHumanInterface
{
    private $modHumanType;

    /**
     * Default Character creation is Main Character
     */
    public function __construct()
    {
        parent::__construct('Frankenstein', 'ModifiedHuman', 'Dark Spear', rand(30, 50));
        $this->modHumanType = 'Super';
    }

    public function getModHumanType()
    {
        return $this->modHumanType;
    }
}