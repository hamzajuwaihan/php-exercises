<?php

//convert string to uppercase:
echo strtoupper("hamza") . "</br>";
// 2
echo strtolower("HAMZA") . "</br>";
// 3
echo ucfirst("hamza") . "</br>";
// 4
echo ucwords("hamza is a computer Science student") . "</br>";
// 5
$input = '085119';
$date = strtotime($input);
echo date('h:i:s', $date) . "</br>";
// 6
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

echo substr($sample, -3) . "</br>";

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
// 10
$sample = "Twinkle, twinkle, little star.";
$data = explode(",", $sample);
var_dump($data);
// 11
$ch = 'z';
$next_ch = ++$ch;
if (strlen($next_ch) > 1) { // if you go beyond z or Z reset to a or A
    $next_ch = $next_ch[0];
}
echo "<br>" . $next_ch."<br>";
// 12
$string = 'The brown fox';
$replacement = 'quick ';
echo substr_replace($string, $replacement, 4, 0)."</br>";
echo strtok($string, " ")."<br>";
// 13
$str = "00775505";
echo  ltrim($str, "0")."<br>";
// 14
$str = "The quick brown fox jumps over the lazy dog";
echo str_replace("fox","",$str)."<br>";
// 15
$str = "The quick brown fox jumps over the lazy ---";
echo  rtrim($str, "-")."<br>";

$string = '\"\1+2/3*2:2-3/4*3';
echo str_replace( array( '/', "'",':' , ';', '<', '-' , '+' ,"*",'\\',"\""), ' ', $string)."<br>";
$str = "The quick brown+fox-jumps/over the lazy dog";
$pieces = explode(" ", str_replace( array( '/', "'",':' , ';', '<', '-' , '+' ,"*",'\\',"\""), ' ', $str));
$first_part = implode(" ", array_splice($pieces, 0, 5));
echo $first_part."<br>";

$str = "2,543.12";
echo str_replace(",","",$str)."<br>";
foreach (range('a', 'z') as $char) {
    echo $char . "\n";
}