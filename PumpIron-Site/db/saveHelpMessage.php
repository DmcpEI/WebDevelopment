<?php
include 'constants.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $gymlocation = $_POST["gymlocation"];
    $message = $_POST["message"];

    $sql = "INSERT INTO help_message (name, email, gym, message) 
    VALUES ('$name', '$email', '$gymlocation', '$message')";

    if ($conn->query($sql) === TRUE) {
        header('Location: ../index.php');     
    } else {
        $error_message = "Error " . $sql . "<br />" . $conn->error . "<br />";
        echo '<script>alert("' . $error_message . '");</script>';
    }
}

$conn->close();
?>