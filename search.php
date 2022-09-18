<form action="" method="get">
    <p>put the link you want:</p>
    <input type="text" name="link" id="">
    <input type="submit" value="Go">


</form>

<?php 
if (isset($_GET['link'])) {
    header("Location: ".$_GET['link']);
    die();
}

?>