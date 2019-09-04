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
    public static function setCharacterRooms(string $mainCharName)
    {
        switch ($mainCharName) {
            case 'Frankenstein':
                $firstRoom  = new FrankFirstR();
                $secondRoom = new FrankSecondR();
                $thirdRoom  = new FrankThirdR();
                $fourthRoom = new FrankFourthR();

                $rooms['firstRoom'] = [
                    'currentRoom' => $firstRoom,
                    'north'       => $firstRoom->north(),
                    'east'        => $firstRoom->east($secondRoom),
                    'south'       => $firstRoom->south($thirdRoom),
                    'west'        => $firstRoom->west($fourthRoom)
                ];

                $rooms['secondRoom'] = [
                    'currentRoom' => $secondRoom,
                    'north'       => $secondRoom->north(),
                    'east'        => $secondRoom->east(),
                    'south'       => $secondRoom->south(),
                    'west'        => $secondRoom->west($firstRoom)
                ];

                $rooms['thirdRoom'] = [
                    'currentRoom' => $thirdRoom,
                    'north'       => $thirdRoom->north(),
                    'east'        => $thirdRoom->east($firstRoom),
                    'south'       => $thirdRoom->south(),
                    'west'        => $thirdRoom->west()
                ];

                $rooms['fourthRoom'] = [
                    'currentRoom' => $fourthRoom,
                    'north'       => $fourthRoom->north($firstRoom),
                    'east'        => $fourthRoom->east(),
                    'south'       => $fourthRoom->south(),
                    'west'        => $fourthRoom->west()
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