<?php

/**
 * @desc 超过int范围的数字字符串在PHP会溢出
 * @desc https://www.hackerrank.com/challenges/big-sorting/problem
 */
function bigSorting($unsorted) {
    $arr = array();
    foreach ($unsorted as $str) {
        $len = strlen($str);
        $arr[$len][] = $str;
    }
    ksort($arr);
    $sorted = array();
    foreach ($arr as $len=>$strArr) {
        $count = count($strArr);
        if ($count == 1) {
            $sorted[] = $strArr[0];
            continue; 
        }
        if ($len <= 9) {
            $intArr = array();
            foreach ($strArr as $v) {
                $intArr[] = intval($v);
            }
            $sorted = array_merge($sorted, $intArr);
            continue;
        }
        for ($i=$count-1; $i>=0; $i--) {
            for ($j=0; $j<$i; $j++){
                for ($k=0; $k<$len; $k++) {
                    $x = intval($strArr[$j+1][$k]);
                    $y = intval($strArr[$j][$k]);
                    if ($x == $y) {
                        continue;
                    }
                    if ($x > $y) {
                        break;
                    }
                    if ($x < $y) {
                        $temp = $strArr[$j];
                        $strArr[$j] = $strArr[$j+1];
                        $strArr[$j+1] = $temp;
                        break;
                    }
                }
            }
        }
        $sorted = array_merge($sorted, $strArr);
    }
    return $sorted;
}
