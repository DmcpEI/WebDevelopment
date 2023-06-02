<?php
include 'constants.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id = $_POST["idMessage"];
$name = $_POST["name"];
$email = $_POST["email"];
$gym = $_POST["gymlocation"];
$message = $_POST["message"];

$sql = "UPDATE help_message SET name='$name', email='$email', gym='$gym', message='$message' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully <br />";
    header('Location: AllHelpMessage.php');
} else {
    echo "Error " . $sql . "<br />" . $conn->error . "<br />"; 
}

$conn->close();
?>