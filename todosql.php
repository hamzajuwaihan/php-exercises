<?php
include "includes.php";
?>
<html>
    <?php 
    include "./includes/meta.php";
    ?>
    <?php 
    include "./includes/header.php";
    ?>
<form action="" method="post">
    <label for="tasks">Add to do:</label><br>
    <textarea type="" name="desc" id="tasks" rows="10" cols="30"></textarea><br><br>
    <button type="submit" value="insert" name="submit">Add</button>

</form>
<?php
$sql = "SELECT id, description FROM tasks";
$result = $conn->query($sql);
echo "

<table class='table'>
    <thead>
        <th>id</th>
        <th>description</th>
    </thead>
    <tbody>";
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        echo ("

            <tr>
            <form action='' method='post'>
            <td>" . $row['id'] . "</td>
            <td> <input name='descval' value='".$row['description']."' type='text'></input> </td>
            <td><button type='submit' name='delete' value='" . $row['id'] . "'>Delete</button></td>
            <td><button type='submit' name='update' value='" . $row['id'] . "'>Update</button></td>
            </form>
            </tr>
        "

        );
    }
    echo "</tbody>
    </table>
    ";
} else {
    echo "0 results";
}
include "./includes/footer.php";
?>

</html>
<?php
if (isset($_POST['submit'])) {
    $desc = $_POST['desc'];
    if ($_POST['submit'] == "insert") {
        $sql = "INSERT INTO tasks (description) VALUES ('$desc')";
        if ($conn->query($sql) === TRUE) {
            header("Refresh:0");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
if (isset($_POST['delete'])) {

    $sql = "DELETE FROM tasks WHERE id=" . $_POST['delete'];;
    if ($conn->query($sql) === TRUE) {
        header("Refresh:0");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
if (isset($_POST['update'])) {

    $sql =  "UPDATE tasks SET description='".$_POST['descval']."' WHERE id=".$_POST['update'];
    if ($conn->query($sql) === TRUE) {
        header("Refresh:0");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>