<?php

/**
 * @desc 计算两边的差集
 * @desc https://www.hackerrank.com/challenges/making-anagrams
 */
function makingAnagrams($s1, $s2) {
    $deletions = 0;
    for ($i=97; $i<=122; $i++) {
        $c = chr($i);
        $deletions += abs(substr_count($s1, $c) - substr_count($s2, $c));
    }
    return $deletions;
}
