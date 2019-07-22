<?php
/**
 * url https://www.hackerrank.com/challenges/kaprekar-numbers/problem
 * desc 计算一个范围内的卡布列克数
 */
function kaprekarNumbers($p, $q) {
    $ret = array();
    for( $p; $p<=$q; $p++ ){
        $pLenth = strlen($p);
        $n = strval(pow($p, 2));
        $nLenth = strlen($n);
        $left = $pLenth>=$nLenth ? 0 : intval(substr($n, 0, ($nLenth-$pLenth)));
        $right = intval(substr($n, 0-$pLenth));
        $sum = $left + $right;
        if( $sum==$p ){
            $ret[] = $p;
        }
    }
    return empty($ret) ? array('INVALID RANGE') : $ret;
}
