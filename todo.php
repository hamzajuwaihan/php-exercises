
<?php
session_start();
$tasks = $_SESSION['task'];
if (isset($_POST['submit']) && $_POST['task']!=="") {
    array_push($tasks,$_POST['task']);
    $_SESSION['task'] = $tasks;


}
?>
<form action="" method="post">
<label for="tasks">Add to do:</label>
<input type="text" name="task" id="tasks"  >
<button type="submit" value="submit" name="submit">Add</button>
</form>
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


?>