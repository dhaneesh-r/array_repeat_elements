<?php

function array_repeat_elements(Array $array)
{
    $total = count($array);
    if ($total == 0) {
        return $array;
    }
    $processed = array();
    $result = array();
    for ($i = 0; $i < $total; $i++) {
        $item = array_shift($array); 
        if (!in_array($item, $processed)) {
             $count = 0;
            $total = count($array);
            for ($j = 0; $j < $total; $j++) {
                if ($array[$j] == $item) {
                    $count++;
                }
            }
            $result[$item] = $count + 1;
            $processed[] = $item;
        }
    }
    return $result;
}

$test = array("1", "1", "1", "2", "2", "2");
print_r(array_repeat_elements($test));
