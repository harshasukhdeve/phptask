<?php
$name = $_POST['name'];
$email = $_POST['email'];
$mobileno = $_POST['mobileno'];
$birthdate = $_POST['birthdate'];
$age = $_POST['age'];
echo "Data submited";
?>

<?php
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($localhost, $root, $root);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>