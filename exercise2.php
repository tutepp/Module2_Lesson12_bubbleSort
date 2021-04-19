<?php

function bubbleSort($array)
{
    for ($i = 0; $i < count($array) - 1; $i++) {

        for ($j = $i + 1; $j < count($array); $j++)
        {
            if ($array[$i] > $array[$j])
            {
                $tmp = $array[$j];
                $array[$j] = $array[$i];
                $array[$i] = $tmp;
            }
        }
    }
    return $array;
}

$arr = [1, 9, 4.5, 6.6, 5.7, -4.5];
echo "<pre>";
var_dump(bubbleSort($arr));