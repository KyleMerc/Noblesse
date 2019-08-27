<?php

namespace Noblesse\Character;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";
//I have to define some constants for tomorrow

abstract class Character implements CharacterInterface
{
    private $name;
    private $charType;
    private $weaponType;
    private $health;

    public function __construct(
        string $newName, 
        string $newCharType,
        string $newWeaponType) {

        $this->name         = $newName;
        $this->charType     = $newCharType;
        $this->weaponType   = $newWeaponType;
        $this->health       = 100;
    }

    public function setName(string $newName)
    {
        $this->name = $newName;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCharType()
    {
        return $this->charType;
    }

    public function getWeaponType()
    {
        return $this->weaponType;
    }

    public function getHealth()
    {
        return $this->health;
    }
}