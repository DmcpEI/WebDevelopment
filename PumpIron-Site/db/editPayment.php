<?php
include 'constants.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id = $_POST["idPayment"];
$card = $_POST["card"];
$street = $_POST["street"];
$select = $_POST["select"];
$city = $_POST["city"];
$province = $_POST["province"];
$postal = $_POST["postal"];

$sql = "UPDATE payment SET card_number='$card', street_address='$street', country='$select', city='$city', province='$province', postal='$postal' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully <br />";
    header('Location: AllPayment.php');
} else {
    echo "Error " . $sql . "<br />" . $conn->error . "<br />"; 
}

$conn->close();
?>