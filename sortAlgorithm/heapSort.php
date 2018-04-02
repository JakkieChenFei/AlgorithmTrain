<?php
function heapSort()
{
    $disorderQueue = [3,2,38,5,15,36,26,23,4,25,65,21,42,34,7];
    $size = sizeof($disorderQueue);
    $disorderQueue = maxHeap($disorderQueue, $size);
    for ($i = $size - 1; $i > 0; $i--) {
        $disorderQueue = swap($disorderQueue, 0, $i);
        $disorderQueue = maxHeap($disorderQueue, --$size);
    }
    print_r($disorderQueue);
}
function maxHeap($array, $size)
{
    for ($i = floor($size/2); $i >= 0; $i--) { 
        $left = 2*$i + 1;
        $right = 2*$i + 2;
        $largest = $i;
        if ($left < $size && $array[$left] > $array[$largest]) {
            $largest = $left;
        }
        if ($right < $size && $array[$right] > $array[$largest]) {
            $largest = $right;
        }
        if ($largest != $i) {
            $array = swap($array, $i, $largest);
            $array = maxHeap($array, --$size);
        }
    }

    return $array;
}
function swap($array, $after, $before)
{
    $temp = $array[$after];
    $array[$after] = $array[$before];
    $array[$before] = $temp;

    return $array;
}
heapSort();
