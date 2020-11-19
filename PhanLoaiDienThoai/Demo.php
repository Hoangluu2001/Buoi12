<?php
function binarySearch( $numbers, $needle) {
    $low = 0;
    $high = count($numbers) - 1;
    while ($low <= $high) {
        $mid = (int) (($low + $high) / 2);
        if ($numbers[$mid] > $needle) {
            $high = $mid - 1;
        } else if ($numbers[$mid] < $needle) {
            $low = $mid + 1;
        } else {
            return TRUE;
        }
    }
    return FALSE;
}
$numbers=array(1,2,4,5);
$needle=1;
var_dump(binarySearch($numbers,$needle));