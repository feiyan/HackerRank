<?php
/**
 * url https://www.hackerrank.com/challenges/beautiful-triplets/problem
 * desc 不满足调节提前中断
 */
function beautifulTriplets($d, $arr) {
    $total = 0;
    $length = count($arr);
    for( $i=0; $i<$length; $i++ ){
        for( $j=$i+1; $j<$length; $j++ ){
            if( ($arr[$j]-$arr[$i])==$d ){
                for( $k=$j+1; $k<$length; $k++ ){
                    if( ($arr[$k]-$arr[$j])==$d ){
                        $total++;
                        break 2;
                    }
                }
            }
        }
    }
    return $total;
}
