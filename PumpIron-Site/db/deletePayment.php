<?php
include 'constants.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id = $_GET["idPayment"];

$sql = "DELETE FROM payment WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully <br />";
    header('Location: AllPayment.php');
} else {
    echo "Error " . $sql . "<br />" . $conn->error . "<br />"; 
}

$conn->close();
?>