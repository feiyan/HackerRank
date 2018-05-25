<?php
/**
 * url https://www.hackerrank.com/challenges/non-divisible-subset/problem
 * desc 取余数后计算，否则会导致内存溢出
 */
function nonDivisibleSubset($k, $S) {
	if( $k==1 ){
		return 1;
	}
	if( $k==2 ){
		return 2;
	}
    $total = 0;
    $arr = array();
    foreach( $S as $v ){
        $remainder = $v%$k;
        if( isset($arr[$remainder]) ){
        	$arr[$remainder] ++;
        } else {
        	$arr[$remainder] = 1;
        }
    }
    arsort($arr);
    $counted = array();
    foreach( $arr as $num=>$count ){
    	if( !isset($counted[$num]) ){
    		if( $num==0 || $num==$k/2 ){
    			$total += 1;
    			$counted[$num] = true;
    		} else {
				$total += $count;
				$counted[$num] = true;
				if( $arr[$k-$num] ){
					$counted[$k-$num] = true;
				}
    		}
    	}
    }
    return $total;
}
