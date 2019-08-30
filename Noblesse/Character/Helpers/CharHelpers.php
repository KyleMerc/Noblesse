<?php

namespace Noblesse\Character\Helpers;

const BASE_HEALTH = 100;
// const BASE_DAMAGE = 100;
// const CRIT_CHANCE = 10;
// const RETREAT     = true;


/**
 * From stackoverflow
 * For future use or not
 * @param int|float $min
 * @param int|float $max
 * @param string $countZero default 1 decimal place
 * 
 * @return float
 */
function mt_rand_float(int $min, int $max, string $countZero = '0') {
    $countZero = +('1'.$countZero);
    $min = floor($min*$countZero);
    $max = floor($max*$countZero);
    $rand = mt_rand($min, $max) / $countZero;
    return $rand;
}