<?php
/*
$CodeWallTutorialArray = ["Eggs", "Bacon", "HashBrowns", "Beans", "Bread", "RedSauce"];
$arrayLength = count($CodeWallTutorialArray);
$i = 0;
while ($i < $arrayLength) {
    echo $CodeWallTutorialArray[$i] . "<br />";
    $i++;
}


# for loop  

$CodeWallTutorialArray = ["Eggs", "Bacon", "HashBrowns", "Beans", "Bread", "RedSauce"];

for ($i = 0; $i < count($CodeWallTutorialArray); $i++) {
    echo $CodeWallTutorialArray[$i] . "<br />";
}

//  for each
$foodArray = ["Eggs", "Bacon", "HashBrowns", "Beans", "Bread"];

foreach ($foodArray as $food) {
    echo $food . "<br />";
}

//  do while 
$foodArray = ["Eggs", "Bacon", "HashBrowns", "Beans", "Bread"];
$i = 0;
do {
    echo $foodArray[$i] . "<br />";
    $i++;
} while ($i < count($foodArray));

//  iterator 
$programmingLanguagesArray = ["PHP", "C++", "C#", "Python", "Java"];
$arrObject = new ArrayObject($programmingLanguagesArray);
$arrayIterator = $arrObject->getIterator();
while ($arrayIterator->valid()) {
    echo $arrayIterator->current() . "<br />";
    $arrayIterator->next();
}

*/

//convert string to uppercase:
echo strtoupper("hamza") . "</br>";
echo strtolower("HAMZA") . "</br>";
echo ucfirst("hamza") . "</br>";
echo ucwords("hamza is a computer Science student") . "</br>";
$input = '085119';
$date = strtotime($input);
echo date('h:i:s', $date) . "</br>";

$sample = "I am a full stack developer at Orange coding academy";

if (strstr($sample, 'Orange')) {
    echo "Word found" . "</br>";
} else {
    echo "word not found" . "</br>";
}
$sample = "www.orange.com/index.php";
echo substr($sample, strpos($sample, "/") + 1) . "</br>";

$sample = "info@orange.com";
echo strstr($sample, "@", true) . "</br>";
echo substr($sample, -strpos($sample, "@") + 1) . "</br>";

$sample = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
echo substr(str_shuffle($sample), 0, 7) . "</br>";
$sample = "that new trainee is so genius";
echo str_replace("that", "our", $sample) . "<br>";

$first = "dragonball";
$second = "dragonboll";

for ($i = 0; $i < strlen($first); $i++) {
    if (substr($first, $i, 1) !== substr($second, $i, 1)) {
        echo "frist diff between two strings at position $i:" . substr($first, $i, 1) . " vs " . substr($second, $i, 1) . "<br>";
        break;
    }
}
$sample = "Twinkle, twinkle, little star.";
$data = explode(",", $sample);
var_dump($data);

$ch = 'z';
$next_ch = ++$ch;
if (strlen($next_ch) > 1) { // if you go beyond z or Z reset to a or A
    $next_ch = $next_ch[0];
}
echo "<br>" . $next_ch."<br>";

$string = 'The brown fox';
$replacement = 'quick ';
echo substr_replace($string, $replacement, 4, 0)."</br>";
echo strtok($string, " ")."<br>";

$str = "00775505";
echo  ltrim($str, "0")."<br>";

$str = "The quick brown fox jumps over the lazy dog";
echo str_replace("fox","",$str)."<br>";
$str = "The quick brown fox jumps over the lazy ---";
echo  rtrim($str, "-")."<br>";

$string = '\"\1+2/3*2:2-3/4*3';
echo str_replace( array( '/', "'",':' , ';', '<', '-' , '+' ,"*",'\\',"\""), ' ', $string)."<br>";
$pieces = explode(" ", $str);
$first_part = implode(" ", array_splice($pieces, 0, 5));
echo $first_part."<br>";

$str = "2,543.12";
echo str_replace(",","",$str)."<br>";
foreach (range('a', 'z') as $char) {
    echo $char . "\n";
}