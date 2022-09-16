<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>calculator</title>
</head>
<body>
<form action="" method="get">
    <label for="fnum">first number:</label>
    <br>
    <input type="text" id="fnum" name="fnum">
    <br>
    <label for="snum">second number: </label>
    <br>
    <input type="text" id="snum" name="snum">
    <br><br>    
    <button type="submit" name="plus" value="+">+</button>
    <button type="submit" name="minus" value="-">-</button>
    <button type="submit" name="multi" value="*">*</button>
    <button type="submit" name="divide" value="/">/</button>
    <br>
</form>

<?php 
$fnum = $_GET["fnum"];
$snum = $_GET["snum"];
if ($fnum == "" || $snum=="") {
    echo "<h6>check your inputs!</h6>";
}
elseif (isset($_GET["plus"]) ) {
    echo ('
    <label for="result">result: </label>
    <br>
    <input type="text" id="result" name="result" value='.$_GET["fnum"]+$_GET["snum"].' disabled>
    ');
}elseif (isset($_GET["minus"]) && isset($_GET["fnum"]) && isset($_GET["snum"])) {
    echo ('
    <label for="result">result: </label>
    <br>
    <input type="text" id="result" name="result" value='.$_GET["fnum"]-$_GET["snum"].' disabled>
    ');
}else if(isset($_GET["multi"]) && isset($_GET["fnum"]) && isset($_GET["snum"])){
    echo ('
    <label for="result">result: </label>
    <br>
    <input type="text" id="result" name="result" value='.($_GET["fnum"])*$_GET["snum"].' disabled>
    ');
}else if (isset($_GET["divide"]) && (float)$_GET["snum"]== 0 && isset($_GET["fnum"])) {
    echo ('
    <label for="result">result: </label>
    <br>
    <input type="text" id="result" name="result" value="can\'t divide on zero!" disabled>
    ');
}else if(isset($_GET["divide"]) && floatval($_GET["snum"])!== 0){
    echo ('
    <label for="result">result: </label>
    <br>
    <input type="text" id="result" name="result" value='.($_GET["fnum"])/$_GET["snum"].' disabled>
    ');
}else {

}

?>
</body>

</html>