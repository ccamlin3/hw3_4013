<?php
$servername = "localhost";
$username = "camcamli_homework3";
$password = "gWLd!^-Ib?gJ";
$dbname = "camcamli_homework3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT sudent_id, student_name FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["student_id"]. " - Name: " . $row["student_name"] . "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
