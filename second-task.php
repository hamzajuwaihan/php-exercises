<?php

function primeCheck($number)
{
    if ($number == 1)
        return "the number not is prime";
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0)
            return "the number not is prime";
    }
    return "the number is prime";
}

echo primeCheck(29) . "<br>";


// reverse a string

function reverseString($str)
{
    $reversed = '';
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $reversed .= substr($str, $i, 1);
    }
    return $reversed;
}
echo reverseString("remove") . "<br>";
// check lower case 
function checkLowerCase($str)
{
    for ($i = 0; $i < strlen($str); $i++) {
        if (substr($str, $i, 1) !== strtolower(substr($str, $i, 1))) {
            return "your string is not ok";
        }
    }
    return "your string is ok";
}

echo checkLowerCase("remove") . "<br>";

// swap

function swapVars(&$first, &$second)
{
    $temp = $first;
    $first = $second;
    $second = $temp;
}

$x = 12;
$y = 10;
echo "x is : $x y is : $y <br>";
swapVars($x, $y);

echo "x is : $x y is : $y <br>";

// armstrong

function armstrong($number)
{
    $sumOfCubes = 0;
    for ($i = 0; $i < strlen($number); $i++) {

        $sumOfCubes += substr($number, $i, 1) ** 3;
    }
    if ($sumOfCubes == $number) {
        return "$number is an Armstrong Number";
    } else {
        return "$number is not an Armstrong Number ";
    }
}
//examples 407 , 371 , 153
echo armstrong(371) . "<br>";

// palindrome 

function checkPalindrome($str)
{

    $trimmedString = strtolower(str_replace(array('/', "'", ':', ';', '<', '-', '+', "*", '\\', "\"", " ", ","), '', $str));
    $mid = strlen($trimmedString);
    for ($i = 0; $i < $mid; $i++) {
        if (substr($trimmedString, strlen($trimmedString) - $i - 1, 1) != substr($trimmedString, $i, 1)) {
            return "this string is not palindrome";
        }
    }
    return "this string is palindrome";
}
//eva can i see bees in a cave
echo checkPalindrome("Eva, can i see bees in a cave") ;

// remove duplicates 
function removeDuplicate($arr)
{

    $outputArray = array();

    foreach ($arr as $inputArrayItem) {
        foreach ($outputArray as $outputArrayItem) {
            if ($inputArrayItem == $outputArrayItem) {
                continue 2;
            }
        }
        $outputArray[] = $inputArrayItem;
    }
    foreach ($outputArray as $item) {
        echo $item . " ";
    }
}

$array = [12, 5, 8, 9, 4, 7];
// foreach ($array as $value) {
//     echo $value . ' ';
// }
echo "<br>";
removeDuplicate($array);
echo "<br>";
// leap year
function year_check($my_year)
{
    if ($my_year % 400 == 0)
        print("It is a leap year <br>");
    else if ($my_year % 100 == 0)
        print("It is not a leap year <br>");
    else if ($my_year % 4 == 0)
        print("It is a leap year <br>");
    else
        print("It is not a leap year <br>");
}
$my_year = 2013;
year_check($my_year);

//season summer or winter
$tempreture = 27;
function seasonTempreture($tempreture){

if ($tempreture < 20) {
    echo "its winter <br>";
} else {
    echo "its summertime <br>";
}
}
seasonTempreture($tempreture);

// sum of two integers 
$arr= ["firstIneger" => 2, "secondInteger" => 2];
function sumOfTwo( $arr){
    
if ($arr["firstIneger"] == $arr["secondInteger"]) {
    echo ($arr["firstIneger"] * $arr["secondInteger"]) * 3 . "<br>";
} else {
    echo ($arr["firstIneger"] * $arr["secondInteger"]) . "<br>";
}
// equals 30 or not
$arr = ["firstIneger" => 10, "secondInteger" => 10];
if ($arr["firstIneger"] + $arr["secondInteger"] == 30) {
    echo ($arr["firstIneger"] + $arr["secondInteger"]) . "<br>";
} else {
    echo ("false") . "<br>";
}
}
sumOfTwo( $arr);
// multiple of 3 

function multipleOfThree($num)
{
    if ($num % 3 == 0 && $num > 0) {
        return "true";
    } else {
        return "false";
    }
}
print multipleOfThree(9) . "<br>";

// range [20-50]

function rangeBetween($num)
{
    if ($num >= 20 && $num <= 50) {
        return "true";
    } else {
        return "false";
    }
}

echo rangeBetween(45) . "<br>";

//largest between three integers

function largestBetween($array)
{
    if ($array[0] >= $array[1] && $array[0] >= $array[2]) {
        return $array[0];
    } else if ($array[1] >= $array[0] && $array[1] >= $array[2]) {
        return $array[1];
    } else {
        return $array[2];
    }
}

echo largestBetween([21, 20, 18]) . "<br>";

// electricity bill 

function electricityBill($units)
{
    $bill = 0;
    if ($units <= 50) {
        $bill += $units * 2.5;
    }
    if ($units > 50 && $units <= 150) {
        $bill += 50 * 2.5;
        $bill += ($units - 50) * 5;
    }
    if ($units > 150 && $units <= 250) {
        $bill += 50 * 2.5;
        $bill += (100) * 5;
        $bill += ($units - 150) * 6.20;
    }
    if ($units > 250) {
        $bill += 50 * 2.5;
        $bill += (100) * 5;
        $bill += (100) * 6.20;
        $bill += ($units - 250) * 7.5;
    }
    return $bill;
}

echo electricityBill(258) . "<br>";
/*
125 ... 50 unit 208 left
500 ... 108 unit left 108
620 ... 8 
60
*/

// calculator 


function calculator($first, $second, $operand)
{
    switch ($operand) {
        case '+':
            return $first + $second;
            break;
        case '-':
            return $first - $second;
            break;
        case '*':
            return $first * $second;
            break;
        case '/':
            return $first / $second;
            break;
    }
}

echo calculator(5, 8, '+') . "<br>";

//vote 

function vote($age)
{
    if ($age < 18) {
        return "is no eligible to vote";
    } else {
        return "can vote";
    }
}

echo vote(15) . "<br>";

// zero / negative / positive 

function checkNumber($num)
{
    if ($num == 0) {
        return "zero";
    }
    if ($num > 0)
        return "positive";
    if ($num < 0)
        return "negative";
}

echo checkNumber(-60) . "<br>";

//average of scores 
function scoresAverage($arr)
{

    $sum = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $sum += $arr[$i];
    }
    $average = $sum / count($arr);
    if ($average < 100 && $average >= 90) {
        return "A";
    } else if ($average < 90 && $average >= 80) {
        return "B";
    } else if ($average < 80 && $average >= 70) {
        return "C";
    }
    else if ($average < 70 && $average >= 60) {
        return "D";
    }else if ($average < 60 && $average >= 0) {
        return "F";
    }
}

echo scoresAverage([60,86,95,63,55,74,79,62,50])."<br>";
