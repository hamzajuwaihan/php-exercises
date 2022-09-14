<?php

function oneLine()
{

    for ($i = 1; $i < 11; $i++) {
        if ($i % 2 == 1) {
            echo "$i-";
        } else if ($i == 10) {
            echo "$i";
        } else {
            echo "$i-";
        }
    }
    echo "<br>";
}
oneLine();

//2 
function displayTotal()
{
    $total = 0;
    for ($i = 1; $i < 31; $i++) {
        $total += $i;
    }
    return $total;
}

echo displayTotal() . "<br>";

//3
function nestedAlphabet()
{

    for ($i = 0; $i < 5; $i++) {
        for ($j = 4; $j >= 0; $j--) {
            if ($j <= $i) {
                echo  chr(ord('A') + $i) . " ";
            } else {
                echo "A" . " ";
            }
        }
        echo "<br>";
    }
}
nestedAlphabet();
//4
function nestedNum()
{

    for ($i = 0; $i < 5; $i++) {
        for ($j = 4; $j >= 0; $j--) {
            if ($j <= $i) {
                echo  1 + $i . " ";
            } else {
                echo "1" . " ";
            }
        }
        echo "<br>";
    }
}
nestedNum();

//5 
function diagonal()
{

    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            if ($j == $i) {
                echo $i + 1;
                echo " ";
            } else {
                echo 0;
                echo " ";
            }
        }
        echo "<br>";
    }
}
diagonal();
//6
function factorial($num)
{
    $factorial = 1;
    for ($i = $num; $i >= 1; $i--) {
        $factorial *= $num--;
    }
    return $factorial;
}
echo factorial(5) . "<br>";

//7 
function fibonacci($n,$first = 0,$second = 1)
{
    $fib = [$first,$second];
    for($i=1;$i<$n;$i++)
    {
        $fib[] = $fib[$i]+$fib[$i-1];
    }
    for ($i=1;$i<$n;$i++) {
        if ($i==$n-1) {
            echo $fib[$i];
            break;
        }
        echo "$fib[$i], ";
    }
}
fibonacci(20);
echo "<br>";

//8
function countC($txt)
{
    $count = 0;
    $txtarray = str_split($txt);
    foreach ($txtarray as $key => $value) {
        if (strtolower($value) == "c") {
            $count++;
        }
    }
    echo $count . "<br>";
}
countC("Orange Coding Academy");

//9

function tableOFmultiplication()
{
    echo "<table style=border-spacing:3px;>";
    for ($i = 1; $i <= 6; $i++) {
        echo "<tr>";
        for ($j = 1; $j < 5; $j++) {
            echo "<td>$i*$j = " . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }



    echo "</table>";
}
tableOFmultiplication();
echo "<br>";

//10
function fizzBuzz()
{
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz ";
        } elseif ($i % 5 == 0) {
            echo "Buzz ";
        } elseif ($i % 3 == 0) {
            echo "Fizz ";
        } else {
            echo "$i ";
        }
    }
}
fizzBuzz();
echo "<br>";

//11 
function floyd()
{
    $counter = 1;
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $counter++ . " ";
        }
        echo "<br>";
    }
}
floyd();
echo "<br>";

//12 

function diamond()
{

    for ($i = 0; $i <= 4; $i++) {
        for ($j = 1; $j <= 4 - $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for ($k = 0; $k <= $i; $k++) {
            if ($k > $i) {
                echo "A";
            } else {
                echo  chr(ord('A') + $k) . " ";
            }
        }
        echo "<br />";
    }
    for ($i = 0; $i <= 3; $i++) {
        for ($j = 4; $j >= 4 - $i; $j--) {
            echo "&nbsp;&nbsp;";
        }
        $s = 0;
        for ($k = 3; $k >= $i; $k--) {

            if ($k >= $i) {

                echo  chr(ord('A') + $s) . " ";
            } else {

                echo "A ";
            }
            $s++;
        }
        echo "<br />";
    }
}

diamond();
