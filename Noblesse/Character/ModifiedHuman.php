<?php

namespace Noblesse\Character;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

abstract class ModifiedHuman extends Character
{
    private $modHumanType;

    public function __construct(
        string $newName, 
        string $newCharType, 
        string $newWeaponType, 
        int    $newMinDamage, 
        int    $newMaxDamage, 
        string $newModHumanType) {

        parent::__construct($newName, $newCharType, $newWeaponType, $newMinDamage, $newMaxDamage);

        $this->modHumanType = $newModHumanType;
    }

    public function getModHumanType()
    {
        return $this->modHumanType;
    }
}