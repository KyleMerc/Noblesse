<?php

namespace Noblesse\Character;

const BASE_HEALTH = 100;
const BASE_DAMAGE = 100;
const CRIT_CHANCE = 10;

function mt_rand_float($min, $max, $countZero = '0') {
    $countZero = +('1'.$countZero);
    $min = floor($min*$countZero);
    $max = floor($max*$countZero);
    $rand = mt_rand($min, $max) / $countZero;
    return $rand;
}