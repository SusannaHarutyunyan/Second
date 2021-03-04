<?php
$Color = [
    'A' => 'Blue'
    , 'B' => 'Green'
    , 'c' => 'Red'
];
//$str = uppercase or lowercase
function up_and_low(array $arr, bool $toUpper = true) : array {
    foreach ($arr as $key => $value){
        if($toUpper) {
            $arr[$key] = strtoupper($value);
        }else{
                $arr[$key] = strtolower($value);
        }
    }
    return $arr;
}

$Color = up_and_low($Color, false);
echo '<pre>';
print_r($Color);
echo '</pre>';
