<?php

namespace Noblesse\Character;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/Character/Helpers/CharHelpers.php";

use Noblesse\Character\Interfaces\CharacterInterface;

use const Noblesse\Character\Helpers\BASE_HEALTH;
abstract class Character implements CharacterInterface
{
    private $name;
    private $charType;
    private $weaponType;
    private $health;
    private $damage;
    private $minDamage;
    private $maxDamage;
    
    /**
     * Characteristics are defined
     * @param string $newName       Name for the character
     * @param string $newCharType   Type of character
     * @param string $newWeaponType Fixed and cannot be changed
     * @param int    $newMinDamage  Minimum damage of weapon
     * @param int    $newMaxDamage  Maximum damage of weapon
     * 
     * @var   int    $health        Default 100 
     */
    public function __construct(
        string $newName, 
        string $newCharType,
        string $newWeaponType,
        int    $newMinDamage,
        int    $newMaxDamage) {

        $this->name         = $newName;
        $this->charType     = $newCharType;
        $this->weaponType   = $newWeaponType;
        $this->health       = BASE_HEALTH;
        $this->minDamage    = $newMinDamage;
        $this->maxDamage    = $newMaxDamage;
    }

    public function setName(string $newName)
    {
        $this->name = $newName;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int Random int
     */
    public function getDamage()
    {
        return $this->damage = rand($this->minDamage, $this->maxDamage);
    }

    /**
     * @return array Minimum and Max damage of the character
     */
    public function getMinMaxDamage()
    {
        return [
            'min' => $this->minDamage,
            'max' => $this->maxDamage
        ];
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

    /**
     * It sets the health to the damage taken by
     * the character.
     * 
     * @param integer $dmgTaken
     * @return void
     */
    public function setHealth(int $dmgTaken)
    {
        $this->health = $this->getHealth() - $dmgTaken;

        if ($this->health <= 0) {
            $this->health = 0;
        }
    }

    /**
     * @param Character $character
     * @return string   Message about this character deals amount of damage
     */
    public function attack(Character $character)
    {
        $damage = $this->getDamage();

        $character->setHealth($damage);

        return "\t    " . $this->getName() . " deals ". $damage . " damage\n";
    }

    /**
     * @return bool Still thinking this might be useful
     * but not used right now.
     */
    public function flee()
    {
        return true;
    }
}