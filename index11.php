<?php

$array1 = [
    [77, 87]
    , [23, 45]
];
$array2 = [
    "w3resource"
    , "com"
];

function merg_arr(array $array11, array $array22): array {
    if(count($array11)<count($array22)){
        $array1 = $array22;
        $array2 = $array11;
    }else{
        $array1 = $array11;
        $array2 = $array22;
    }
    $new_arr = [];
    for ($i = 0; $i < count($array1); $i++) {
        if (isset($array2[$i])) {
            if (!is_array($array2[$i])) {
                $array2[$i] = (array)$array2[$i];
            }
            if (!is_array($array1[$i])) {
                $array1[$i] = (array)$array1[$i];
            }
            $new_arr[$i] = array_merge($array2[$i], $array1[$i]);
        }else{
            $new_arr[$i] = $array1[$i];
        }
    }
    return $new_arr;
}
$new_arr = merg_arr($array1, $array2);

echo '<pre>';
print_r($new_arr);
echo '</pre>';
