<?php

namespace Noblesse\Character;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/Character/Helpers/CharHelpers.php";

use Noblesse\Character\Interfaces\CharacterInterface;

use const Noblesse\Character\Helpers\BASE_HEALTH;
class Character implements CharacterInterface
{
    private $name;
    private $charType;
    private $weaponType;
    private $health;
    private $damage;
    private $minDamage;
    private $maxDamage;
    private $modHumanType;
    
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
    // public function __construct(
    //     string $newName, 
    //     string $newCharType,
    //     string $newWeaponType,
    //     int    $newMinDamage,
    //     int    $newMaxDamage) {

    //     $this->name         = $newName;
    //     $this->charType     = $newCharType;
    //     $this->weaponType   = $newWeaponType;
    //     $this->health       = BASE_HEALTH;
    //     $this->minDamage    = $newMinDamage;
    //     $this->maxDamage    = $newMaxDamage;
    // }


    // //Character setting creation
    // public function createFrankentein()
    // {
    //     $this->setName('Frankenstein');
    //     $this->setDamage(30, 50);
    //     $this->setModHumanType(true, 'Super');
        
    // }
    // //-------------------------

    public function setName(string $newName)
    {
        $this->name = $newName;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setModHumanType(bool $isModHuman = false, string $type = '')
    {
        if (! $isModHuman) $this->modHumanType = NULL;

        $this->modHumanType = $type; 
    }

    public function getModHumanType()
    {
        return $this->modHumanType;
    }

    public function setDamage(int $min, int $max)
    {
        $this->minDamage = $min;
        $this->maxDamage = $max;
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

    public function setCharType(string $newCharType)
    {
        $this->charType = $newCharType;
    }

    public function getCharType()
    {
        return $this->charType;
    }

    public function setWeaponType(string $newWeaponType)
    {
        $this->weaponType = $newWeaponType;
    }

    public function getWeaponType()
    {
        return $this->weaponType;
    }

    public function setHealth(int $newHealth)
    {
        $this->health = $newHealth;
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
    public function damageHealth(int $dmgTaken)
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

        $character->damageHealth($damage);

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