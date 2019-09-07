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

abstract class NewRoomFactory
{
    public static function setCharRooms(string $mainCharName)
    {
        switch ($mainCharName) {
            case 'Frankenstein':
                $firstRoom  = new FrankFirstR();
                $secondRoom = new FrankSecondR();
                $thirdRoom  = new FrankThirdR();
                $fourthRoom = new FrankFourthR();

                $firstRoom->setDirection(NULL, $secondRoom, $thirdRoom, $fourthRoom);
                $secondRoom->setDirection(NULL, NULL, NULL, $firstRoom);
                $thirdRoom->setDirection($firstRoom, NULL, NULL, NULL);
                $fourthRoom->setDirection(NULL, $firstRoom, NULL, NULL);

                return [
                    'firstRoom'     => $firstRoom,
                    'secondRoom'    => $secondRoom,
                    'thirdRoom'     => $thirdRoom,
                    'fourthRoom'    => $fourthRoom
                ];
            case 'Muzaka':
                $firstRoom  = new  MuzakaFirstR();
                $secondRoom = new  MuzakaSecondR();
                $thirdRoom  = new  MuzakaThirdR();
                $fourthRoom = new  MuzakaFourthR();

                $firstRoom->setDirection(NULL, $thirdRoom, NULL, $secondRoom);
                $secondRoom->setDirection(NULL, $firstRoom, NULL, NULL);
                $thirdRoom->setDirection(NULL, NULL, $fourthRoom, $firstRoom);
                $fourthRoom->setDirection($thirdRoom, NULL, NULL, NULL);

                return [
                    'firstRoom'     => $firstRoom,
                    'secondRoom'    => $secondRoom,
                    'thirdRoom'     => $thirdRoom,
                    'fourthRoom'    => $fourthRoom
                ];
            case 'Han Shinwoo':
                $firstRoom  = new HanFirstR();
                $secondRoom = new HanSecondR();
                $thirdRoom  = new HanThirdR();
                $fourthRoom = new HanFourthR();

                $firstRoom->setDirection(NULL, $secondRoom, $fourthRoom, NULL);
                $secondRoom->setDirection(NULL, $thirdRoom, NULL, $firstRoom);
                $thirdRoom->setDirection(NULL, NULL, NULL, $secondRoom);
                $fourthRoom->setDirection($firstRoom, NULL, NULL, NULL);

                return [
                    'firstRoom'     => $firstRoom,
                    'secondRoom'    => $secondRoom,
                    'thirdRoom'     => $thirdRoom,
                    'fourthRoom'    => $fourthRoom
                ];
            case 'M-21':
                $firstRoom  = new M21FirstR();
                $secondRoom = new M21SecondR();
                $thirdRoom  = new M21ThirdR();
                $fourthRoom = new M21FourthR();

                $firstRoom->setDirection(NULL, $secondRoom, NULL, NULL);
                $secondRoom->setDirection($fourthRoom, NULL, $thirdRoom, $firstRoom);
                $thirdRoom->setDirection($secondRoom, NULL, NULL, NULL);
                $fourthRoom->setDirection(NULL, NULL, $secondRoom, NULL);

                return [
                    'firstRoom'     => $firstRoom,
                    'secondRoom'    => $secondRoom,
                    'thirdRoom'     => $thirdRoom,
                    'fourthRoom'    => $fourthRoom
                ];
        }
    }
}