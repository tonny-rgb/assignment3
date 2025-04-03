<?php
function binarySearch($arr, $target) {
    $left = 0;
    $right = count($arr) - 1;
    
    while ($left <= $right) {
        $mid = floor(($left + $right) / 2);
        
        if ($arr[$mid] == $target) {
            return $mid;
        } elseif ($arr[$mid] < $target) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }
    
    return -1;
}

$sortedArray = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$target = 50;
$result = binarySearch($sortedArray, $target);

if ($result != -1) {
    echo "Number found at index: " . $result;
} else {
    echo "Number not found in the array.";
}
?>
