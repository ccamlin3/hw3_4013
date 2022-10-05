<?php require_once("header.php"); ?>
<!doctype html>
<html lang="en">

  <table class="table table-striped">
  <thead>
    <tr>
      <th>Course ID</th>
      <th>Section ID</th>
      <th>Instructor ID</th>
      <th>Section Number</th>
    </tr>
  </thead>
  <tbody>
<?php

$servername = "localhost:3306";
$username = "camcamli_homework3";
$password = "gWLd!^-Ib?gJ";
$dbname = "camcamli_homework3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT course_id, section_id, section_number, instructor_id FROM section";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
echo '<tr>              
                  <td scope="row">' . $row["course_id"]. '</td>
                  <td>' . $row["section_id"] .'</td>
                  <td> ' . $row["section_number"] .'</td>
                  <td> ' . $row["instructor_id"] .'</td>
                   <br>                
                </tr>';
} else {
  echo "0 results";

?>
  </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
