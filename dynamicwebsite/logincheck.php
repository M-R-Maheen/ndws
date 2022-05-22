<?php
include('includes/sessionstart.php');

$email='';
$password='';

$email=$_POST['email'];
$password=$_POST['password'];

//echo $_POST['password']; // check

$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "dynamicwebsite";

// Create connection
$conn = new mysqli($servername, $username , $pass, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo $email.$password; // check 
$sql = "SELECT id FROM users WHERE email = '$email' && password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows ==1) {
      $_SESSION["loggedin"] = "1";
      header('Location: http://localhost/dynamicwebsite/index.php');
} else {
      $_SESSION["loggedin"] = "0";
      header('Location: http://localhost/dynamicwebsite/login.php');
}
$conn->close();

?>