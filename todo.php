
<?php
session_start();
$starttime = microtime(true); 
setcookie('todo', 'task 4,5,6,7,8,9');
$tasks = $_SESSION['task'];
if (isset($_POST['submit']) && $_POST['task']!=="") {
    array_push($tasks,$_POST['task']);
    $_SESSION['task'] = $tasks;


}
if (empty($_SESSION['counter']))
	$_SESSION['counter'] = 1;
else
	$_SESSION['counter']++;
?>
<html>
<form action="" method="post">
<label for="tasks">Add to do:</label>
<input type="text" name="task" id="tasks"  >
<button type="submit" value="submit" name="submit">Add</button>
</form>
</html>
<?php 

if (isset($_POST['delete'])) {
    unset($_SESSION['task'][$_POST['delete']]);
    header("Refresh:0");
}
echo "<form action='' method='post'><ul>";
foreach ($tasks as $key => $value) {
    echo ("<li name='{$key}'> {$value} <button value='$key' type='submit' name='delete'>Delete</button></li>");
}
echo "</ul></form>";
echo "name of script: ". basename($_SERVER['PHP_SELF']) . " name of project: ".basename(dirname(__FILE__));
echo "<br>";
echo $_SESSION['counter']."times."; 
echo "<br>";
echo "cookie value: ". $_COOKIE['todo']."<br>";

$endtime = microtime(true);

printf("Page loaded in %f seconds", $endtime - $starttime );

?>