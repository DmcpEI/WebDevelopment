<?php
include 'constants.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id = $_GET["idMessage"];

$sql = "SELECT * FROM help_message WHERE id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $message = $result->fetch_assoc();

    echo'
        <form id="form" action = "db/editHelpMessage.php" method="POST">

            <div class="mx-auto mb-3 input-control" style = "width: 40%;">
                <input name="idMessage" value="'.$id.'"  style="display: none"/>                    
            </div>

            <div style = "width: 99%;" class="input-control">
                <label for="name" class="form-label text-light">Name*</label>
                <input id = "name" name = "name" autofocus class="form-control" type="text" value="'.$message["name"].'">
                <div class = "error"></div>
            </div>

            <div style = "width: 99%;" class="input-control">
                <label for="email" class="form-label text-light">Email address*</label>
                <input type="text" id="email" name = "email" class="form-control" value="'.$message["email"].'">
                <div class = "error"></div>
            </div>

            <div style = "width: 99%;" class="input-control">
                <label for="gymLocations" class="form-label text-light">Gym Location</label>
                <select name="gymlocation" class="form-select" aria-label="Default select example">
                    <option '. ($message["gym"]=="1" ? "selected" : "") .' value="1">One</option>
                    <option '. ($message["gym"]=="2" ? "selected" : "") .' value="2">Two</option>
                    <option '. ($message["gym"]=="3" ? "selected" : "") .' value="3">Three</option>
                </select>
            </div>

            <div>
                <label for="message" class="form-label text-light">Message*</label>
                <div style="width: 100%; display: table;">
                    <div style="display: table-row">
                        <div class="input-control" style="display: table-cell; width: 90%;">
                            <input type="text" id="message" name = "message" class="form-control"  value="'.$message["message"].'">
                            <div class = "error"></div>
                        </div>
                        &nbsp;
                        <div style="display: table-cell;">
                            <button type="submit" class="btn text-light mx-auto" style="background-color: #f80505;">Send</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>

    ';
} else {
    echo "Error " . $sql . "<br />" . $conn->error . "<br />"; 
}

$conn->close();
?>