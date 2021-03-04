<?php
//12rd
echo '<h3> 12rd </h3>';
$Color = [
    'A' => 'Blue'
    , 'B' => 'Green'
    , 'c' => 'Red'
];
function up_and_low(array $arr, bool $toUpper = true): array
{
    foreach ($arr as $key => $value) {
        $arr[$key] = $toUpper ? strtoupper($value) : $arr[$key] = strtolower($value);
    }
    return $arr;
}

$Color = up_and_low($Color, true);
echo '<pre>';
print_r($Color);
echo '</pre>';


//13rd
echo ' <br> <h3> 13rd </h3>';
$str = '   somETHing is WRitten.  ';


//a
$str = strtoupper($str);
echo $str . '<br>';


//b
$str = strtolower($str);
echo $str . '<br>';


//c
$str = trim($str);
$str = ucfirst($str);
echo $str . '<br>';


//d
$str = ucwords($str);
echo $str;


//14rd
echo ' <br> <h3> 14rd </h3>';
$sub_str = 'fox jumps over the';
$main_str = 'The quick brown fox jumps over the lazy dog';
echo strpos($main_str, $sub_str) === false ? 'String doesn\'t contain given substring.' : 'String contains given substring';


//15rd
echo ' <br> <h3> 15rd </h3>';
$sample_str1 = 'www.example.com/public_html/index.php';
$files_array = explode('/', $sample_str1);
echo '\'' . $files_array[count($files_array) - 1] . '\'';


//16rd
echo ' <br> <h3> 16rd </h3>';
$sample_str2 = 'rayy@example.com';
$files_array = explode('@', $sample_str2);
echo '\'' . $files_array[0] . '\'';


//17rd
echo ' <br> <h3> 17rd </h3>';
$sample_str2 = 'rayy@example.com';
$last3 = substr($sample_str2, strlen($sample_str2) - 3);
echo '\'' . $last3 . '\'';


//18rd
echo ' <br> <h3> 18rd </h3>';
$sample_str3 = 'the quick brown fox jumps over the lazy dog.';
$sample_str3 = substr_replace($sample_str3, 'That', strpos($sample_str3, 'the'), 3);
echo $sample_str3;


//19rd
echo ' <br> <h3> 19rd </h3>';
$string1 = 'football';
$string2 = 'football';

function get_index(string $string1, string $string2): ?int
{
    $s1_arr = str_split($string1);
    $s2_arr = str_split($string2);
    $length = max(count($s1_arr), count($s2_arr));
    for ($i = 0; $i < $length; $i++) {
        if (!isset($s1_arr[$i]) || !isset($s2_arr[$i]) || $s1_arr[$i] != $s2_arr[$i]) {
            return $i;
        }
    }
    return null;
}

echo (get_index($string2, $string1)) !== null ? get_index($string2, $string1) : 'Matching words';


//20rd
echo ' <br> <h3> 20rd </h3>';
$num_str = '2,543.12';
$num_str = str_replace(',', '', $num_str);
echo $num_str;