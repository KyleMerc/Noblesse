<?php

namespace Noblesse\Character;

require $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

class Human extends Character
{
    /**
     * Default Character creation is Main Character
     */
    public function __construct()
    {
        parent::__construct('Han Shinwoo', 'Human', 'Karate', 45);
    }
}