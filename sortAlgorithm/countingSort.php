<?php
function countingSort()
{
    $disorderQueue = [3,2,38,5,15,36,26,23,4,25,65,21,42,34];
    $list = array();
    $min = getMinMax($disorderQueue, 'min');
    $max = getMinMax($disorderQueue, 'max');
    for ($i = $min; $i <= $max; $i++) { 
        $list[$i] = 0;
    }
    foreach ($disorderQueue as $key => $value) {
        $list[$value]++;
    }
    $index = 0;
    for ($j = $min; $j <= $max; $j++) {
        while ($list[$j] > 0 ) {
            $disorderQueue[$index++] = $j;
            $list[$j]--;
        }
    }
    print_r($disorderQueue);
}
function getMinMax($arrList, $operation)
{
    if (empty($arrList)) {
        echo 'the array is empty';die;
    }

    $temp = $arrList[0];
    for ($i = 0; $i < sizeof($arrList); $i++) {
        if ($operation === 'min') {
            $temp = ($temp < $arrList[$i]) ? $temp : $arrList[$i];
        } elseif ($operation === 'max') {
            $temp = ($temp > $arrList[$i]) ? $temp : $arrList[$i];
        }
    }

    return $temp;
}
countingSort();
