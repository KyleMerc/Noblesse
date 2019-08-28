<?php

namespace Noblesse\Character;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

class SimpleModifiedHuman extends Character implements ModifiedHumanInterface
{
    private $modHumanType;
    
    /**
     * Default Character creation is Main Character
     */
    public function __construct()
    {
        parent::__construct('M-21', 'ModifiedHuman', 'Gun', rand(20, 30));
        $this->modHumanType = 'Simple';
    }
    
    public function getModHumanType()
    {
        return $this->modHumanType;
    }
}