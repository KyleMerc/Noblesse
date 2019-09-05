<?php

namespace Noblesse\Storyline\Factory;

require_once $_SERVER['DOCUMENT_ROOT'] . 'Noblesse/start.php';

use Noblesse\Storyline\CharacterMap\Frankenstein\{
    FirstRoom   as FrankFirstR, 
    SecondRoom  as FrankSecondR, 
    ThirdRoom   as FrankThirdR, 
    FourthRoom  as FrankFourthR
};
use Noblesse\Storyline\CharacterMap\M_21\{
    FirstRoom   as M21FirstR, 
    SecondRoom  as M21SecondR, 
    ThirdRoom   as M21ThirdR, 
    FourthRoom  as M21FourthR
};
use Noblesse\Storyline\CharacterMap\Muzaka\{
    FirstRoom   as MuzakaFirstR, 
    SecondRoom  as MuzakaSecondR, 
    ThirdRoom   as MuzakaThirdR, 
    FourthRoom  as MuzakaFourthR
};
use Noblesse\Storyline\CharacterMap\Han_Shinwoo\{
    FirstRoom   as HanFirstR, 
    SecondRoom  as HanSecondR, 
    ThirdRoom   as HanThirdR, 
    FourthRoom  as HanFourthR
};

abstract class RoomFactory
{

    /**
     *
     * @param string $mainCharName
     * @return array 4 room objects
     */
    public static function setCharacterRooms(string $mainCharName)
    {
        switch ($mainCharName) {
            case 'Frankenstein':
                $rooms = [];

                $firstRoom  = new FrankFirstR();
                $secondRoom = new FrankSecondR();
                $thirdRoom  = new FrankThirdR();
                $fourthRoom = new FrankFourthR();

                $rooms['firstRoom'] = [
                    'currentRoom' => $firstRoom,
                    'north'       => NULL,
                    'east'        => $secondRoom,
                    'south'       => $thirdRoom,
                    'west'        => $fourthRoom
                ];
                $rooms['secondRoom'] = [
                    'currentRoom' => $secondRoom,
                    'north'       => NULL,
                    'east'        => NULL,
                    'south'       => NULL,
                    'west'        => $firstRoom
                ];
                $rooms['thirdRoom'] = [
                    'currentRoom' => $thirdRoom,
                    'north'       => NULL,
                    'east'        => $firstRoom,
                    'south'       => NULL,
                    'west'        => NULL
                ];
                $rooms['fourthRoom'] = [
                    'currentRoom' => $fourthRoom,
                    'north'       => $firstRoom,
                    'east'        => NULL,
                    'south'       => NULL,
                    'west'        => NULL
                ];

                return $rooms;
                
            case 'M-21':
                $rooms = [];

                $firstRoom  = new M21FirstR();
                $secondRoom = new M21SecondR();
                $thirdRoom  = new M21ThirdR();
                $fourthRoom = new M21FourthR();

                $rooms['firstRoom'] = [
                    'currentRoom' => $firstRoom,
                    'north'       => NULL,
                    'east'        => $secondRoom,
                    'south'       => NULL,
                    'west'        => NULL
                ];
                $rooms['secondRoom'] = [
                    'currentRoom' => $secondRoom,
                    'north'       => $fourthRoom,
                    'east'        => NULL,
                    'south'       => $thirdRoom,
                    'west'        => $firstRoom
                ];
                $rooms['thirdRoom'] = [
                    'currentRoom' => $thirdRoom,
                    'north'       => $secondRoom,
                    'east'        => NULL,
                    'south'       => NULL,
                    'west'        => NULL
                ];
                $rooms['fourthRoom'] = [
                    'currentRoom' => $fourthRoom,
                    'north'       => NULL,
                    'east'        => NULL,
                    'south'       => $secondRoom,
                    'west'        => NULL
                ];

                return $rooms;

            case 'Muzaka':
                $rooms = [];

                $firstRoom  = new MuzakaFirstR();
                $secondRoom = new MuzakaSecondR();
                $thirdRoom  = new MuzakaThirdR();
                $fourthRoom = new MuzakaFourthR();

                $rooms['firstRoom'] = [
                    'currentRoom' => $firstRoom,
                    'north'       => NULL,
                    'east'        => $thirdRoom,
                    'south'       => NULL,
                    'west'        => $secondRoom
                ];
                $rooms['secondRoom'] = [
                    'currentRoom' => $secondRoom,
                    'north'       => NULL,
                    'east'        => $firstRoom,
                    'south'       => NULL,
                    'west'        => NULL
                ];
                $rooms['thirdRoom'] = [
                    'currentRoom' => $thirdRoom,
                    'north'       => NULL,
                    'east'        => NULL,
                    'south'       => $fourthRoom,
                    'west'        => $firstRoom
                ];
                $rooms['fourthRoom'] = [
                    'currentRoom' => $fourthRoom,
                    'north'       => $thirdRoom,
                    'east'        => NULL,
                    'south'       => NULL,
                    'west'        => NULL
                ];

                return $rooms;
                
            case 'Han Shinwoo':
                $rooms = [];

                $firstRoom  = new HanFirstR();
                $secondRoom = new HanSecondR();
                $thirdRoom  = new HanThirdR();
                $fourthRoom = new HanFourthR();

                $rooms['firstRoom'] = [
                    'currentRoom' => $firstRoom,
                    'north'       => NULL,
                    'east'        => $secondRoom,
                    'south'       => $fourthRoom,
                    'west'        => NULL
                ];
                $rooms['secondRoom'] = [
                    'currentRoom' => $secondRoom,
                    'north'       => NULL,
                    'east'        => $thirdRoom,
                    'south'       => NULL,
                    'west'        => $firstRoom
                ];
                $rooms['thirdRoom'] = [
                    'currentRoom' => $thirdRoom,
                    'north'       => NULL,
                    'east'        => NULL,
                    'south'       => NULL,
                    'west'        => $secondRoom
                ];
                $rooms['fourthRoom'] = [
                    'currentRoom' => $fourthRoom,
                    'north'       => $firstRoom,
                    'east'        => NULL,
                    'south'       => NULL,
                    'west'        => NULL
                ];
            
                return $rooms;
        }
    }
}