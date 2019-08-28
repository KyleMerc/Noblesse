<?php

namespace Noblesse\Character;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/Character/CharHelpers.php";

use const Noblesse\Character\{BASE_HEALTH, BASE_DAMAGE};

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
        float  $charDmg) {

        $this->name         = $newName;
        $this->charType     = $newCharType;
        $this->weaponType   = $newWeaponType;
        $this->health       = BASE_HEALTH;
        $this->damage       = $charDmg;
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
        // return $character->setHealth($this->getDamage());
        // return $this->getDamage();
        return mt_rand(0.14, 0.54);
    }
}