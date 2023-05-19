<?php
include 'constants.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id = $_GET["idPayment"];

$sql = "SELECT * FROM payment WHERE id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $payment = $result->fetch_assoc();
    
    echo '<form id = "form" action = "db/editPayment.php" method="POST">

                <div class="mx-auto mb-3 input-control" style = "width: 40%;">
                    <input name="idPayment" value="'.$id.'"  style="display: none"/>                    
                </div>

                <div class="mx-auto mb-3 input-control" style = "width: 40%;">
                    <input id = "card" name = "card" autofocus class="form-control" type="text" value="'.$payment['card_number'].'">
                    <div class = "error"></div>
                </div>

                <div class="mx-auto mb-3 input-control" style = "width: 40%;">
                    <input id="street" name="street" class="form-control" type="text" aria-label="default input example" value="'.$payment['street_address'].'">
                    <div class = "error"></div>
                </div>

                <div class="mx-auto mb-3 input-control" style = "width: 40%;">
                    <select id="select" name="select" class="form-select" aria-label="Default select example">
                        <option '. ($payment["country"]=="1" ? "selected" : "") .' value="1">Slovenia</option>
                        <option '. ($payment["country"]=="2" ? "selected" : "") .' value="2">Portugal</option>
                        <option '. ($payment["country"]=="3" ? "selected" : "") .' value="3">United Kingdom</option>
                    </select>
                    <div class = "error"></div>
                </div>

                <div class="mx-auto mb-3 input-control" style = "width: 40%;">
                    <input id="city" name="city" class="form-control" type="text" aria-label="default input example" value="'.$payment['city'].'">
                    <div class = "error"></div>
                </div>

                <div style="width: 35%;" class="mx-auto mb-5">
                    <div style="display: flex; align-items: center;">
                        <div class="input-control">
                            <input id="province" name="province" style="margin-right: 2%;" class="form-control" type="text" aria-label="default input example" value="'.$payment['province'].'">
                            <div class = "error"></div>
                        </div>
                        &nbsp;
                        <div class="input-control">
                            <input id="postal" name="postal" style="margin-left: 2%;" class="form-control" type="text" aria-label="default input example" value="'.$payment['postal'].'">
                            <div class = "error"></div>
                        </div>
                    </div>
                </div>

                <div style="width: 40%;" class="mx-auto d-flex justify-content-center">
                    <button type="submit" class="btn text-light" style="background-color: #f80505; width: 80%;">Save Payment</button>
                </div>

            </form>';

    
} else {
    echo "Error " . $sql . "<br />" . $conn->error . "<br />"; 
}

$conn->close();
?>