<?php
// array -1 
$colors = ["blue", "green", "white"];

function generateParagraph($colors)
{
    return "The memory of that scene for me is like a frame of film forever frozen at that moment:
         the $colors[0] carpet, the $colors[1] lawn, the $colors[2] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
}
echo generateParagraph($colors) . "<br>";


// array -2 

function unorderedlist($colors)
{
    $list = "";
    for ($i = 0; $i < count($colors); $i++) {
        $list .= "<li>$colors[$i]</li>";
    }
    return "<ul>$list</ul>";
}

echo unorderedlist($colors) . "<br>";
//cities question
$cities = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid");
asort($cities);

foreach ($cities as $key => $value) {
    echo "The capital of $key is $value<br />";
}

// 4 first element 

function firstElement($colors)
{
    echo $colors['4']  . "<br>";
}
$color = array(4 => 'white', 6 => 'green', 11 => 'red');
firstElement($color);

//5 
$array = [1, 2, 3, 4, 5];
function insert($arr, $insertion, $pos)
{
    $newArray = $arr;
    array_splice($newArray, $pos, 0, $insertion);

    return $newArray;
}

print_r(insert($array, "$", 4));
echo "<br>";

//6
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
ksort($fruits);

print_r($fruits);
echo "<br>";
$tempretures = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

function avgTempreture($temps)
{
    sort($temps);
    $sum = 0;
    foreach ($temps as $key => $value) {
        $sum += $value;
    }
    $avg = $sum / count($temps);
    return "
    Average tempreture: $avg <br>
    list of five lowest: $temps[0] $temps[1] $temps[2] $temps[3] $temps[4] <br>
    list of five highest: " . $temps[count($temps) - 1] . " " . $temps[count($temps) - 2] . " " . $temps[count($temps) - 3] . " " . $temps[count($temps) - 4] . " " . $temps[count($temps) - 5] . "<br>";
}
print_r($tempretures);
echo avgTempreture($tempretures);

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

function mergeArrays($arr1, $arr2)
{
    $mergedArray = [];
    $mergedArray = array_merge($arr1, $arr2);
    print_r($mergedArray);
}
echo "////////";
mergeArrays($array1, $array2);
// print_r();
echo "<br>";
//9
$colors = array("red", "blue", "white", "yellow");
function convertToUpper($array)
{
    for ($i = 0; $i < count($array); $i++) {
        $array[$i] = strtoupper($array[$i]);
    }
    return $array;
}

print_r(convertToUpper($colors));
echo "<br>";

// 10 
$colors = array("RED", "BLUE", "WHITE", "YELLOW");
function convertToLower($array)
{
    for ($i = 0; $i < count($array); $i++) {
        $array[$i] = strtolower($array[$i]);
    }
    return $array;
}

print_r(convertTolower($colors));
echo "<br>";

//11


function displayDivisable()
{
    $array = [];
    for ($i = 200; $i <= 250; $i++) {
        if ($i % 4 == 0) {
            array_push($array, $i);
        }
    }
    print_r($array);
}
displayDivisable();
echo "<br>";
//12
$words =  array("abcd", "abc", "de", "hjjj", "gggggg", "wer");
function longestWord($arr)
{
    $longest = $arr[0];
    $shortest = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if (strlen($arr[$i]) >= strlen($longest)) {
            $longest = $arr[$i];
        }
        if (strlen($arr[$i]) <= strlen($shortest)) {
            $shortest = $arr[$i];
        }
    }
    return "the shortest string in the array is:" . strlen($shortest) . " the longest is:" . strlen($longest);
}

echo longestWord($words) . "<br>";

// 13 

function randomRange($lowest, $highest)
{
    $arr = [];
    for ($i = 0; $i < 9; $i++) {
        array_push($arr, rand($lowest, $highest));
    }
    return $arr;
}
print_r(randomRange(11, 20));
echo "<br>";

//14 
function lowestNotZero($arr)
{
    $lowest = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if ($lowest >= $arr[$i] && $arr[$i] != 0) {
            $lowest = $arr[$i];
        }
    }
    return $lowest;
}
$array1 = array(2, 0, 10, 12, 6);
echo lowestNotZero($array1) . "<br>";
