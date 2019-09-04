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
     * @return array
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
                return [
                    'firstRoom'     => new M21FirstR(),
                    'secondRoom'    => new M21SecondR(),
                    'thirdRoom'     => new M21ThirdR(),
                    'fourthRoom'    => new M21FourthR(),
                ];
            case 'Muzaka':
                return [
                    'firstRoom'     => new MuzakaFirstR(),
                    'secondRoom'    => new MuzakaSecondR(),
                    'thirdRoom'     => new MuzakaThirdR(),
                    'fourthRoom'    => new MuzakaFourthR(),
                ];
            case 'Han Shinwoo':
                return [
                    'firstRoom'     => new HanFirstR(),
                    'secondRoom'    => new HanSecondR(),
                    'thirdRoom'     => new HanThirdR(),
                    'fourthRoom'    => new HanFourthR(),
                ];
        }
    }
}