<?php
include 'constants.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM help_message";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
    <head class="color">

        <title>All Head Messages</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="../styles.css" />

    </head>
    <body class="backgroundImg">

        <div class="p-3 container-fluid">
            <div style = "height: 100px; display: flex; align-items: center; justify-content: center;">
    
                <h1 style="font-size: 500%;" class="mx-auto text-center text-light">All Help Messages</h1>
    
            </div>
        </div>

        <div class="text-light" style="display: flex; align-items: center; justify-content: center;">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gym</th>
                    <th>Message</th>
                    <th>Manipulation of Data</th>
                </tr>

                <?php
                if ($result->num_rows > 0) {
                    while ($message = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $message["name"]; ?></td>
                            <td><?php echo $message["email"]; ?></td>
                            <td><?php echo $message["gym"]; ?></td>
                            <td><?php echo $message["message"]; ?></td>
                            <td><a href="editHelpMessage.php">Edit</a> & Delete</td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "<tr><td colspan='4'>No help messages found</td></tr>";
                }
                ?>
            </table>
        </div>

        <?php
        $conn->close();
        ?>

        <br>

        <div style="width: 40%;" class="mx-auto d-flex justify-content-center">
            <button type="submit" class="btn text-light" style="background-color: #f80505; width: 80%;" onclick="window.location.href='../index.php'">Index</button>
        </div>

    </body>
</html>
