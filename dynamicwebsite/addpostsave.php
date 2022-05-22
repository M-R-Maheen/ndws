
<?php
include('includes/sessionstart.php');

$title='';
$content='';

$title=$_POST['title'];
$content=$_POST['content'];

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
$sql = "INSERT INTO post (title, content)
VALUES ('$title', '$content')";

if ($conn->query($sql) === TRUE) {
      $last_id = $conn->insert_id;
      header('Location: http://localhost/dynamicwebsite/index.php');
    } else {
      header('Location: http://localhost/dynamicwebsite/addpost.php');
    }

$conn->close();

?>