<?php

namespace Noblesse\Character\Interfaces;

interface CharacterInterface
{
    public function setName(string $newName);
    public function getName();
    public function setCharType(string $newCharType);
    public function getCharType();
    public function setWeaponType(string $newWeaponType);
    public function getWeaponType();
    public function setModHumanType(bool $isModHuman = false, string $type = '');
    public function getModHumanType();
    public function setDamage();
    public function getDamage();
    public function getMinMaxDamage();
}