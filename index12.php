<?php
$Color = [
    'A' => 'Blue'
    , 'B' => 'Green'
    , 'c' => 'Red'
];
//$str = uppercase or lowercase
function up_and_low(array &$arr, string $str = 'uppercase') : void {
    foreach ($arr as $key => $value){
        switch ($str){
            case 'uppercase':
                $arr[$key] = strtoupper($value);
                break;
            case 'lowercase':
                $arr[$key] = strtolower($value);
                break;
            default:
                echo 'Invalid argument!';
                break;
        }
    }
    return;
}

up_and_low($Color, 'lowercase');
echo '<pre>';
print_r($Color);
echo '</pre>';
