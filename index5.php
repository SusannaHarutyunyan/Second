<?php
echo '<br> <br> 6rd <br>';
$str = <<<HERE
{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
    "Publisher": "Little Brown"
}}
HERE;
$arr = explode('"', $str);
for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] == ': ') {
        echo $arr[$i - 1], $arr[$i], $arr[$i + 1];
        echo '<br>';
    }
}

//$obj = json_decode($str);
//var_dump($obj);
//foreach($obj as $k => $v) {
//    if(!is_object($v))
//    echo $k . ": " . $v . "<br>";
//    else foreach ($v as $key => $val){
//        echo $key . ": " . $val . "<br>";
//    }
//}



echo '<br> <br> 7rd';
$x = [1, 2, 3, 4, 5];
$item = '$';
$x1 = array_slice($x, 0, rand(0, count($x)));
$x1[] = $item;
$x2 = array_slice($x, count($x1) - 1, count($x) - count($x1) + 1);
$x = array_merge($x1, $x2);
echo '<pre>';
print_r($x);
echo '</pre>';

echo '<br> <br> 8rd';
$ages = ["Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40"];
//a
asort($ages, SORT_NUMERIC);
echo '<pre>';
print_r($ages);
echo '</pre>';

//b
ksort($ages, SORT_STRING);
echo '<pre>';
print_r($ages);
echo '</pre>';

//c
arsort($ages, SORT_NUMERIC);
echo '<pre>';
print_r($ages);
echo '</pre>';

//d
krsort($ages, SORT_STRING);
echo '<pre>';
print_r($ages);
echo '</pre>';