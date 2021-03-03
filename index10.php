<?php
$arr = [5, 3, 1, 3, 8, 7, 4, 1, 1, 3];
function bead(array $bead_arr) :array
{
    for ($j = 0; $j < count($bead_arr); $j++) {
        $bool = true;
        for ($i = 0; $i < count($bead_arr) - 1; $i++) {
            if ($bead_arr[$i] < $bead_arr[$i + 1]) {
                $temp = $bead_arr[$i];
                $bead_arr[$i] = $bead_arr[$i + 1];
                $bead_arr[$i + 1] = $temp;
                $bool = false;
            }
        }
        if($bool) break;
    }
    return $bead_arr;
}
$arr = bead($arr);
echo '<pre>';
print_r($arr);
echo '</pre>';
