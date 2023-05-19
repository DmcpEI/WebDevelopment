<?php
include 'constants.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id = $_GET["idMessage"];

$sql = "DELETE FROM help_message WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully <br />";
    header('Location: AllHelpMessage.php');
} else {
    echo "Error " . $sql . "<br />" . $conn->error . "<br />"; 
}

$conn->close();
?>