<?php

/**
 * @desc 计算两边的差集
 * @desc https://www.hackerrank.com/challenges/anagram
 */
function anagram($s) {
    $len = strlen($s);
    if ($len < 2 || $len%2 != 0) {
        return -1;
    }
    $left = substr($s, 0, $len/2);
    $right = substr($s, $len/2);
    $change = 0;
    for ($i=97; $i<=122;$i++) {
        $c = chr($i);
        $x = substr_count($left, $c);
        $y = substr_count($right, $c);
        $change += abs($x-$y);
    }
    return $change/2;
}

