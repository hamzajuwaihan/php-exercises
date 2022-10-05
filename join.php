<!-- SELECT students.Student_id , students.first_name,students.last_name,classes.title FROM `students` INNER JOIN enrollments on students.Student_id=enrollments.student_id 
INNER JOIN classes ON enrollments.class_id= classes.class_id -->

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db_name="it_academy";
// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT 
 users.username, users.password,users.is_instructor, courses.course_instructor, courses.course_name,course_category,course_category.category_name
FROM 
users
INNER JOIN 
courses 
ON
users.user_id=courses.course_instructor
INNER JOIN
course_category
ON
courses.course_category = course_category.category_id
";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row\
  echo "<table><thead><th>username</th><th>password</th><th>is_instructor</th><th>course_instructor</th><th>course_name</th><th>course_category</th><th>category_name</th></thead>
  <tbody>";
  while($row = $result->fetch_assoc()) {
    echo (
        "
        <tr>
        <td>".$row['username']."</td>
        <td>".$row['password']."</td>
        <td>".$row['is_instructor']."</td>
        <td>".$row['course_instructor']."</td>
        <td>".$row['course_name']."</td>
        <td>".$row['course_category']."</td>
        <td>".$row['category_name']."</td>
        </tr>
        "
    );
  }
  echo "</tbody></table>";
} else {
  echo "0 results";
}
$conn->close();
?>