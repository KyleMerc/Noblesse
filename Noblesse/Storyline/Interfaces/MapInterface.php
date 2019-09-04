<?php

namespace Noblesse\Storyline\Interfaces;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";

use Noblesse\Storyline\Map;

interface MapInterface
{
    public function getRoomName();
    public function getFoundDoors();
    public function openDoor(bool $key, string $door);
    public function getTrapCount();
    public function getItemCount();
}