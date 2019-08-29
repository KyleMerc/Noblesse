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
    private $damage;

    public function __construct(
        string $newName, 
        string $newCharType,
        string $newWeaponType,
        int    $charDamage) {

        $this->name         = $newName;
        $this->charType     = $newCharType;
        $this->weaponType   = $newWeaponType;
        $this->health       = 100;
        $this->damage       = $charDamage;
    }

    public function setName(string $newName)
    {
        $this->name = $newName;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDamage()
    {
        return $this->damage;
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

    public function setHealth(int $dmgTaken)
    {
        $this->health = $this->getHealth() - $dmgTaken;
    }

    public function attack(Character $character)
    {
        $character->setHealth($this->getDamage());
    }
}