<?php

namespace Noblesse\Storyline\Factory;

require_once $_SERVER['DOCUMENT_ROOT'] . 'Noblesse/start.php';

use Noblesse\Storyline\Frankenstein\{
    FirstRoom   as FrankFirstR, 
    SecondRoom  as FrankSecondR, 
    ThirdRoom   as FrankThirdR, 
    FourthRoom  as FrankFourthR
};
use Noblesse\Storyline\M_21\{
    FirstRoom   as M21FirstR, 
    SecondRoom  as M21SecondR, 
    ThirdRoom   as M21ThirdR, 
    FourthRoom  as M21FourthR
};
use Noblesse\Storyline\Muzaka\{
    FirstRoom   as MuzakaFirstR, 
    SecondRoom  as MuzakaSecondR, 
    ThirdRoom   as MuzakaThirdR, 
    FourthRoom  as MuzakaFourthR
};
use Noblesse\Storyline\Han_Shinwoo\{
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
                return [
                    'firstRoom'     => new FrankFirstR(),
                    'secondRoom'    => new FrankSecondR(),
                    'thirdRoom'     => new FrankThirdR(),
                    'fourthRoom'    => new FrankFourthR(),
                ];
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