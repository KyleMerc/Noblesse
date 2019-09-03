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
    public function north(Map $room = NULL);
    public function east(Map $room = NULL);
    public function south(Map $room = NULL);
    public function west(Map $room = NULL);
}