<?php
$email='';
$password='';

$email=$POST['email'];
$password=$POST['password'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dynamicwebsite";

// Create connection
$conn = new mysqli($servername, $username , $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, email, password FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. "Email:" . $row["email"]."Password:" .$row["password"]. "<br>";
  }
} else {
  echo "No Users Found !!";
}
$conn->close();

?>