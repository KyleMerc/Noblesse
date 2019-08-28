<?php

namespace Noblesse\Character;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

interface ModifiedHumanInterface extends CharacterInterface
{
    public function getModHumanType();
}