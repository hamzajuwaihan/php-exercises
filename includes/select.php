<table class='table'>

<thead>
    <tr>
        <th scope='col'>id</th>
        <th scope='col'>description</th>
    </tr>
</thead>
<tbody>
    <?php
    include "./includes/header.php";
    include "./includes.php";


    $sql = "SELECT id, description FROM tasks";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

            echo ("
    <tr>
    <td>" . $row['id'] . "</td>
    <td>" . $row['description'] . "</td>
    </tr>
");
        }
    } else {
        echo "0 results";
    }
    ?>
</tbody>
</table>
