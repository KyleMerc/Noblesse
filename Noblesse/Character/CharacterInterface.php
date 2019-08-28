<?php

namespace Noblesse\Character;

interface CharacterInterface
{
    public function setName(string $newName);
    public function getName();
    public function getDamage();
    public function getHealth();
    public function getCharType();
    public function getWeaponType();
}