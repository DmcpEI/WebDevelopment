<?php
include 'constants.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        $card = $_POST["card"];
        $street = $_POST["street"];
        $select = $_POST["select"];
        $city = $_POST["city"];
        $province = $_POST["province"];
        $postal = $_POST["postal"];

        $sql = "INSERT INTO payment (card_number, street_address, country, city, province, postal) 
                VALUES ('$card', '$street', '$select', '$city', '$province', '$postal')";

        if ($conn->query($sql) === TRUE) {
            header('Location: ../index.php');
        } else {
            $error_message = "Error " . $sql . "<br />" . $conn->error . "<br />";
            echo '<script>alert("' . $error_message . '");</script>';
        }
    }

    $conn->close();
}
?>
