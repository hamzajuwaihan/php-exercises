<?php
//declare(strict_types=1);
// PHP Built-in Functions
// PHP has over 1000 built-in functions that can be called directly, from within a script, to perform a specific task.





function addNumbers(int $a, int $b)
{
    return $a + $b;
}
echo addNumbers(5, "5") . "<br>";
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10



/*
 // strict requirement

function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is enabled and "5 days" is not an integer, an error will be thrown
*/


//PHP Return Type Declarations
function addNumbersFloat(float $a, float $b): float
{
    return $a + $b;
}
echo addNumbersFloat(1.2, 5.2) . "<br>";

//Passing Arguments by Reference
function add_five(&$value)
{
    $value += 5;
}

$num = 2;
add_five($num);
echo $num;
