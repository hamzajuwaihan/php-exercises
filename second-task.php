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

echo checkLowerCase("remove")."<br>";

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
swapVars($x,$y);

echo "x is : $x y is : $y <br>";

// armstrong

function armstrong($number){
    $sumOfCubes =0;
    for ($i=0; $i < strlen($number); $i++) { 
        
        $sumOfCubes += substr($number, $i, 1)**3;
    }
    if($sumOfCubes == $number){
        return "$number is an Armstrong Number";
    }else{
        return "$number is not an Armstrong Number ";
    }
}
//examples 407 , 371 , 153
echo armstrong(371  )."<br>";

// palindrome 

function checkPalindrome($str){
   
    $trimmedString = strtolower(str_replace( array( '/', "'",':' , ';', '<', '-' , '+' ,"*",'\\',"\""," ",","), '', $str));
    echo $trimmedString ."<br>";
    $mid = strlen($trimmedString);
    for ($i=0; $i < $mid; $i++) { 
        if (substr($trimmedString, strlen($trimmedString)-$i-1, 1) != substr($trimmedString, $i, 1)) {
            return "this string is not palindrome";
        }

    }
    return "this string is palindrome";
}
//eva can i see bees in a cave
echo checkPalindrome("Eva, can i see bees in a cave")."<br>";

// remove duplicates 
function removeDuplicate($arr){

    $exportedArray= [];
    for ($i=0; $i < strlen($arr); $i++) { 
        for ($j=0; $j < strlen($arr); $j++) { 
            if($arr[$i] !== $arr[$j]){
                
            }
        }
    }
}