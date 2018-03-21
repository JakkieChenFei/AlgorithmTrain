<?php
function bubbleSort()
{
    $queue = [3, 33, 8421, 492, 2, 401, 23];
    $size = sizeof($queue);
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size - 1 - $i; $j++) { 
            if ($queue[$j] > $queue[$j + 1]) {
            $temp = $queue[$j + 1];
            $queue[$j + 1] = $queue[$j];
            $queue[$j] = $temp;
            }
        }
    }
    print_r($queue);
}
bubbleSort();
 