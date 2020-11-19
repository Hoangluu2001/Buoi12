<?php
//function countNumber($value,$Number){
//    $count = 0 ;
//    for ( $i = 0 ; $i < count($Number) ; ++$i){
//        if( $Number[$i] == $value ){
//            $count++;
//        }
//    }
//    return $count;
//}
//echo  countNumber(1,[1,2,3,4,1,2,6,7,8,9]);



$arr = [ 1,2,3,4,1,2,6,7,8,9];
echo '<pre>';
print_r(array_count_values($arr));
